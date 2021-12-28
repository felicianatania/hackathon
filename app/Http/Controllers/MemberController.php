<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function registerMemberPage(){
        return view('memberRegister');
    }

    public function createMember(MemberRequest $request){
        $cv_file_name = $request->CV->getClientOriginalName();
        $CV = $request->file('CV')->storeAs('file-data', $cv_file_name);

        $IdCard_file_name = $request->IdCard->getClientOriginalName();
        $IdCard = $request->file('IdCard')->storeAs('file-data', $IdCard_file_name);

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
        ]);

        return redirect(route('registerMemberPage'));
    }

}
