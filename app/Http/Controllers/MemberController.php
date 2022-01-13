<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

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

        return redirect(route('home'));
    }

}
