<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function registerLeaderPage(){
        return view('leaderRegister');
    }

    public function createLeader(LeaderRequest $request){
        $cv_file_name = $request->CV->getClientOriginalName();
        $CV = $request->file('CV')->storeAs('file-data', $cv_file_name);

        $IdCard_file_name = $request->IdCard->getClientOriginalName();
        $IdCard = $request->file('IdCard')->storeAs('file-data', $IdCard_file_name);

        Leader::create([
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

        return redirect(route('registerLeaderPage'));
    }

    // public function getLeaders(){
    //     $leaders = Leader::all();
    //     //$book = DB::table('books')->get(); //yg 'books' itu nama table
    //     return view('view', ['leaders' => $leaders]); //yg merah 'songs' itu nama variabel
    // }


}
