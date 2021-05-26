<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Signup;
use App\Bug;
class SignupController extends Controller
{
    public function sign(){                 //return signUp page
        return view('signup');
    }
    // public function login(){
    //     return
    // }
    
    
    public function insert(Request $request)   // for signing up
    {
        $obj=new Signup;
        $obj->user_name=$request->user_name;
        $obj->email=$request->email;
        $obj->pass=$request->pass;
        $obj->save();
        return view('login');
    }
   /* public function fech()
    {
        $obj=Signup::all();
        $obj=$obj->values()->all();
        return view('read',compact('obj'));
    }*/
    public function login(Request $request)  // for login and creating session
    {
        $user=$request->input('user_name');
        $pass=$request->input('pass');
        $request->session()->put('u',$user);
        $data=DB::select("select * from signups where user_name='$user' && pass='$pass'");
        if($data)
        {
            return view('news');
        }
        else
        {
            echo "Wrong Email or Password";
        }
    }

    public function logged(Request $request)  // for checking if session exsists then return 'can i run game' page
    {
        if($request->session()->has('u'))
        {
            return view('requirement_form');
        }
        else
        {
            return view('login');
        }
    }
    public function bug(Request $request)  // for checking if session exsists then return 'can i run game' page
    {
        if($request->session()->has('u'))
        {
            return view('bug_forum');
        }
        else
        {
            return view('login');
        }
    }
    public function bug1(Request $request)  // for checking if session exsists then return 'can i run game' page
    {
        $value = $request->session()->get('u');
        $obj=new Bug;
        $obj->user_id=$value;
        $obj->queries=$request->queries;
        $obj->solution='No Solution found';
        $obj->save();
        return view('news');

    }
    public function logout(Request $request)  // for destroying session
    {
        $request->session()->forget('u');
        return view('news');
    }
    public function rec(Request $request)  //for checking if session exsists then return 'games recommendation' page
    {
        if($request->session()->has('u'))
        {
            return view('rec_requirement_form');
        }
        else
        {
            return view('login');
        }
    }
    public function comp(Request $request) // for checking if session exsists then return 'hardware comparison' page
    {
        if($request->session()->has('u'))
        {
            return view('comparison_form');
        }
        else
        {
            return view('login');
        }
    }
    public function gpu_form(Request $request) //  for requesting gpu form
    {   $name = 'admin';
        if($request->session()->has('u'))

        {
            $value = $request->session()->get('u');
            if($value==$name){
                return view('gpu_form');
            }
            else{
                return view('login');
            }
        }   
        else
        {
            return view('login');
        }
    }
    public function user_name(Request $request) //  for user name
    {
        if($request->session()->has('u'))
        {
            return view('comparison_form');
        }
        else
        {
            return view('login');
        }
    }
    public function cpu_form(Request $request) //  for requesting cpu form
    {   $name = 'admin';
        if($request->session()->has('u'))

        {
            $value = $request->session()->get('u');
            if($value==$name){
                return view('cpu_form');
            }
            else{
                return view('login');
            }
        }   
        else
        {
            return view('login');
        }
    }
    public function solution(Request $request) //  for requesting cpu form
    {   
        if($request->session()->has('u'))

        {
            $value = $request->session()->get('u');
           $solution='No Solution found';
            $bug = Bug::where('user_id', $value)->get();
            $bug1 = Bug::where('solution', $solution)->get();
           
            return view('solution_forum',compact('bug','bug1','value'));
        }   
        else
        {
            return view('login');
        }
    }
    public function solution1(Request $request,$user_id,$queries)

    {   
        $accept = Bug::where('user_id', $user_id)->where('queries', $queries)->update(array('solution'=>$request->comment));
        echo '<script type="text/javascript">'
        , 'history.go(-1);'
        ,'window = window.location.reload();'
        , '</script>';
        
    }


}
