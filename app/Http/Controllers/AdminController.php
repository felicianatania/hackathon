<?php

namespace App\Http\Controllers;

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
        $CV= User::find($id);
        //dd($group);
        return view('adminPanel.viewData', ['group' => $group]);
    }

    public function getMemberByIdView($id, $memberNo){
        $member = DB::table('members')->where('groupId',$id)->where('memberNo',$memberNo)->get()->toArray();;
        // if ($member->count()) {
        //     return view('cobacobi');
        // }

        return view('adminPanel.viewMember', ['member' => $member, 'groupId'=>$id]);
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


    public function getGroupByIdd($id){
        $group = User::find($id);
        //dd($group);
        return view('adminPanel.updateGroup', ['group' => $group]);
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

    // public function dashboardPage(){
    //     return view('adminPanel.dashboard');
    // }
}
