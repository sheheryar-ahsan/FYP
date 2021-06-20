<?php

namespace App\Http\Controllers;
use App\Gpu;
use Illuminate\Http\Request;
use DB;
use App\Signup;
use App\Admin1;
use App\Admin;
class AdController extends Controller
{
    public function admin(){                 
        return view('admin_login');
    }
    
    public function adminlogin(Request $request){                 
        $admin=$request->input('admin');
        $password=$request->input('pass');
        $data=DB::select("select * from adm where username='$admin' &&  password='$password'");
if( $data){
   
    $users = DB::select('select * from signups');
    return view('dashboard',['users'=>$users]);
}
else{
    return view('admin_login');
}
    }
    
    public function dashboard(){                
        $users = DB::select('select * from signups');
        
        return view('dashboard',['users'=>$users]);
    }
    public function edituser($id){              
     
       $users = Signup::find($id);
        return view('UpdateUser',['users'=>$users]);
    }
    
    public function Uuser(Request $request,$id){                 
        $update = \DB::table('signups') ->where('id', $id)->update( [ 'user_name' => $request->username, 'email' =>$request->email, 'pass' => $request->password]); 
        return redirect()->action('AdController@dashboard');
     }
     public function deleteuser($id){     
        DB::table('signups')->where('id', $id)->delete();           
        return redirect()->action('AdController@dashboard');
     }
     
     public function showgpu(){                
        $users = DB::select('select * from gpus');
   
        return view('dashboardgpushow',['users'=>$users]);
    }
    
    public function showcpu(){                
        $users = DB::select('select * from admins');
      
        return view('dashboardshowcpu',['users'=>$users]);
    }
    public function editgpu($id){                
        $users = Gpu::find($id);
  
        return view('dashboardupdategpuform',['users'=>$users]);
    }
    public function editcpu($id){                
        $users = Admin::find($id);
  
        return view('dashboardupdatecpuform',['users'=>$users]);
    }
    
    public function gpu_update(Request $request,$id){                
        $update = \DB::table('gpus') ->where('id', $id)->update( [ 'name' => $request->name, 'memory' =>$request->memory, 'bandwidth' => $request->bandwidth,'clock' => $request->clock, 'type' =>$request->type, 'unit' => $request->unit]); 
        return redirect()->action('AdController@showgpu');
     }
     public function deletegpu($id){                
        
        DB::table('gpus')->where('id', $id)->delete(); 
        return redirect()->action('AdController@showgpu');
    }
    public function deletecpu($id){                
        
        DB::table('admins')->where('id', $id)->delete(); 
        return redirect()->action('AdController@showcpu');
    }
    public function cpu_update(Request $request,$id){                 //return bug forum
        $update = \DB::table('admins') ->where('id', $id)->update( [ 'name' => $request->name, 'core' =>$request->core, 'thread' => $request->thread,'clock' => $request->clock, 'l1' =>$request->l1, 'l2' => $request->l2,'l3' => $request->l3]); 
        return redirect()->action('AdController@showcpu');
     }
}
