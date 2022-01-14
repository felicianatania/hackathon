<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getGroups(){
        $groups = User::all()->except(1);
        //$book = DB::table('books')->get();
        return view('adminPanel.participantPanel', ['groups' => $groups]);
    }

    public function getGroupsDashboard(){
        $groups = User::all()->except(1);
        //$book = DB::table('books')->get();
        return view('adminPanel.dashboard', ['groups' => $groups]);
    }

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

    public function searchGroup(){
        $search_text = $_GET['query'];
        $groups = User::where('groupName', 'LIKE', '%'.$search_text.'%')->get()->except(1);
        return view('adminPanel.searchGroup', compact('groups'));
    }

    public function orderGroup(){
        $groups = User::orderBy('groupName')->get()->except(1);
        return view('adminPanel.searchGroup', compact('groups'));
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

    public function updateMember(MemberRequest $request, $id, $memberNo){
        $member = Member::find($id);
        //$member = Member::where('id', $id);
        //$member = DB::table('members')->where('id',$id)->where('memberNo',$memberNo)->get();


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
        return redirect()->route('getMemberByIdEdit', ['id' => $id, 'memberNo'=>$memberNo]);
    }

    // public function dashboardPage(){
    //     return view('adminPanel.dashboard');
    // }
}
