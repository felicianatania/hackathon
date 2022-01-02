<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getGroups(){
        $groups = User::all();
        //$book = DB::table('books')->get();
        return view('adminPanel.participantPanel', ['groups' => $groups]);
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
        $groups = User::where('groupName', 'LIKE', '%'.$search_text.'%')->get();
        return view('adminPanel.searchGroup', compact('groups'));
    }

    public function orderGroup(){
        $groups = User::orderBy('groupName')->get();
        return view('adminPanel.searchGroup', compact('groups'));
    }
}