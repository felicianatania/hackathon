<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function getGroupById(Request $request){
        $groupId = $request->user()->id;
        //dd($book);
        return view('member.memberRegister', ['groupId' => $groupId]);
    }

    // public function getGroupById($id){
    //     $group = User::find($id);
    //     //dd($book);
    //     return view('memberRegister', ['group' => $group]);
    // }

    public function createMember(MemberRequest $request, $id, $memberNo){
        $cv_file_name = $request->CV->getClientOriginalName();
        $CV = $request->file('CV')->storeAs('file', $cv_file_name);

        $IdCard_file_name = $request->IdCard->getClientOriginalName();
        $IdCard = $request->file('IdCard')->storeAs('file', $IdCard_file_name);

        Member::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'WA' => $request->WA,
            'lineId' => $request->lineId,
            'github' => $request->github,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'CV' => $CV,
            'IdCard' => $IdCard,
            'groupId' => $id,
            'memberNo' => $memberNo,
        ]);

        return redirect(route('ValidasiUser'));
    }

    public function dashboardView(Request $request){
        $groupId = $request->user()->id;
        $group = User::find($groupId);
        $member1 = DB::table('members')->where('groupId',$groupId)->where('memberNo', 1)->get()->toArray();
        $member2 = DB::table('members')->where('groupId',$groupId)->where('memberNo', 2)->get()->toArray();
        $member3 = DB::table('members')->where('groupId',$groupId)->where('memberNo', 3)->get()->toArray();


        return view('member.dashboard', ['group' => $group, 'member1' => $member1, 'member2' => $member2,'member3' => $member3,]);
    }

    // public function getMemberByIdDashboard($id){
    //     $member1 = DB::table('members')->where('groupId',$id)->where('memberNo', 1)->get()->toArray();
    //     $member2 = DB::table('members')->where('groupId',$id)->where('memberNo', 2)->get()->toArray();
    //     $member3 = DB::table('members')->where('groupId',$id)->where('memberNo', 3)->get()->toArray();
    //     $group = User::find($id);

    //     return view('adminPanel.viewMember', ['member1' => $member1, 'member2' => $member2,'member3' => $member3,'groupId'=>$id, 'group'=>$group]);
    // }
}
