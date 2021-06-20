<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bug;
class BugController extends Controller
{
    public function bug(){                 //return bug forum
        return view('bug_forum');
    }

    public function issue_insert(Request $request)   // for inserting bug/issues
    {
        // dd($request->all());
        $obj=new Bug;
        $obj->user_id=$request->user_id;
        $obj->queries=$request->queries;
        $obj->solution=$request->solution;
        $obj->save();
        return view('bug_forum');
    }
}
