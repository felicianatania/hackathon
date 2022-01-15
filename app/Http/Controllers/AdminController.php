<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Storage;

class AdminController extends Controller
{
    public function getGroups(){
        $groups = User::all()->except(1);
        //$book = DB::table('books')->get();
        return view('adminPanel.participantPanel', ['groups' => $groups]);
    }

    public function getGroupsDashboard(){
        $groups = User::all()->except(1);
        $imagepayments = DB::table('payments')->select('payment')->get();
        //$group = DB::table('payments')->select('groupId')->get();
        //dd($imagepayments);
        //$payments = Payment::all()->except(1);
        //$book = DB::table('books')->get();
        return view('adminPanel.dashboard', ['groups' => $groups, 'imagepayments' => $imagepayments]); //'payments'=>$payments]);
    }

    //get image Payment
    public function imagePayment($id){
        $imagepayment= DB::table('payments')->where('groupId',$id)->get()->toArray();
        //return Redirect::to('https://www.pakainfo.com');
        //return redirect()->away('');
        return view('adminPanel.imagepayment', ['imagepayment' => $imagepayment ]);
        //return redirect()->route('getMemberByIdEdit', ['id' => $groupId, 'memberNo'=>$memberNo]);
    }

    // public function getPaymentByGroupId($groupId){
    //     //$payment = DB::table('payments')->where('groupId',$groupId)->get()->toArray();
    //     $payment = Auth::user()->payment;
    //     return (['payment'=>$payment]);
    // }

    public function getGroupByIdView($id){
        $group = User::find($id);
        //dd($group);
        return view('adminPanel.viewData', ['group' => $group]);
    }

    public function getMemberByIdView($id, $memberNo){
        $member = DB::table('members')->where('groupId',$id)->where('memberNo',$memberNo)->get()->toArray();
        $group = User::find($id);
        // if ($member->count()) {
        //     return view('cobacobi');
        // }

        return view('adminPanel.viewMember', ['member' => $member, 'groupId'=>$id, 'group'=>$group]);
        // if($memberNo == 1){
        //     return view('adminPanel.viewMember1', ['member' => $member]);
        // }
        // else if($memberNo == 2){
        //     return view('adminPanel.viewMember2', ['member' => $member]);
        // }
        // else if($memberNo == 3){
        //     return view('adminPanel.viewMember3', ['member' => $member]);
        // }
    }

    public function getGroupByIdEdit($id){
        $group = User::find($id);
        //dd($group);
        return view('adminPanel.updateGroup', ['group' => $group]);
    }

    public function getMemberByIdEdit($id, $memberNo){
        $member = DB::table('members')->where('groupId',$id)->where('memberNo',$memberNo)->get()->toArray();
        $group = User::find($id);
        return view('adminPanel.updateMember', ['member' => $member, 'groupId'=>$id, 'group'=>$group]);
    }

    public function deleteGroup($id){
        User::destroy($id);
        return redirect(route('getGroups'));
    }

    public function filterUnverifiedDashboard(){
        $groups = User::where('verification', 0)->get()->except(1);
        return view('adminPanel.searchDashboard', compact('groups'));
    }

    public function filterVerifiedDashboard(){
        $groups = User::where('verification', 1)->get()->except(1);
        return view('adminPanel.searchDashboard', compact('groups'));
    }

    public function filterUnverifiedParticipant(){
        $groups = User::where('verification', 0)->get()->except(1);
        return view('adminPanel.searchParticipant', compact('groups'));
    }

    public function filterVerifiedParticipant(){
        $groups = User::where('verification', 1)->get()->except(1);
        return view('adminPanel.searchParticipant', compact('groups'));
    }

    public function searchParticipant(){
        $search_text = $_GET['query'];
        $groups = User::where('groupName', 'LIKE', '%'.$search_text.'%')->get()->except(1);
        return view('adminPanel.searchParticipant', compact('groups'));
    }

    public function searchDashboard(){
        $search_text = $_GET['query'];
        $groups = User::where('groupName', 'LIKE', '%'.$search_text.'%')->get()->except(1);
        return view('adminPanel.searchDashboard', compact('groups'));
    }

    public function orderParticipant(){
        $groups = User::orderBy('groupName')->get()->except(1);
        return view('adminPanel.searchParticipant', compact('groups'));
    }

    public function orderDashboard(){
        $groups = User::orderBy('groupName')->get()->except(1);
        return view('adminPanel.searchDashboard', compact('groups'));
    }

    public function verifyGroup($id){
        $group = User::find($id);

        $group -> update([
            'verification' => 1,
        ]);

        return redirect(route('getGroupsDashboard'));
    }

    public function updateGroup(Request $request, $id){
        $group = User::find($id);

        $group -> update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'WA' => $request->WA,
            'lineId' => $request->lineId,
            'github' => $request->github,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
        ]);

        return redirect()->route('getGroupByIdEdit', ['id' => $id]);
    }

    public function updateMember(MemberRequest $request, $id, $memberNo, $groupId){
        $member = Member::find($id);
        dd($member);
        //$member = Member::where('id', $id);
        //$member = DB::table('members')->where('groupId',$groupId)->where('memberNo',$memberNo)->get();


        $member -> update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'WA' => $request->WA,
            'lineId' => $request->lineId,
            'github' => $request->github,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
        ]);

        //return redirect(route('getGroupByIdEdit'));
        //return redirect()->route( 'getGroupByIdEdit' )->with( [ 'id' => $id ] );
        return redirect()->route('getMemberByIdEdit', ['id' => $groupId, 'memberNo'=>$memberNo]);
    }

    // public function dashboardPage(){
    //     return view('adminPanel.dashboard');
    // }
}
