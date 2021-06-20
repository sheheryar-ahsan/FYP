<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Admin;
use App\Gpu;
use App\Game;
class AdminController extends Controller
{
    //
    public function game(){
        return view('game');
    }
    public function cpu_insert(Request $request)   // for inserting cpu data
    {
        $obj=new Admin;
        $obj->name=$request->name;
        $obj->core=$request->core;
        $obj->thread=$request->thread;
        $obj->clock=$request->clock;
        $obj->l1=$request->l1;
        $obj->l2=$request->l2;
        $obj->l3=$request->l3;
        $obj->save();
        return view('cpu_form');
    }
    public function gpu_insert(Request $request)   // for inserting gpu data
    {
        $obj=new Gpu;
        $obj->name=$request->name;
        $obj->memory=$request->memory;
        $obj->bandwidth=$request->bandwidth;
        $obj->clock=$request->clock;
        $obj->type=$request->type;
        $obj->unit=$request->unit;
        $obj->save();
        return view('gpu_form');
    }
    public function game_insert(Request $request)   // for inserting game data
    {
        $obj=new Game;
        $obj->name=$request->name;
        $obj->cpu=$request->cpu;
        $obj->gpu=$request->gpu;
        // $obj->ram=$request->ram;
        $obj->save();
        return view('game');
    }
    public function comparison(Request $request)  // for can i run game option
    {
        $game=$request->input('game');
        $cpu=$request->input('cpu');
        $gpu=$request->input('gpu');
        // $ram=$request->input('ram');
        $data=DB::select("select * from admins where name LIKE '%$cpu%'"); // Selecting that requirement specific cpu and gpu
        $data1=DB::select("select * from gpus where name LIKE '%$gpu%'");
        

        $data2=DB::table('games')->where('name', $game)->value('cpu'); // Selecting cpu, gpu and ram of game
        $data4=DB::table('games')->where('name', $game)->value('gpu');
        // $data6=DB::table('games')->where('name', $game)->value('ram');

        $data3=DB::select("select * from admins where name LIKE '%$data2%'");
        $data5=DB::select("select * from gpus where name LIKE '%$data4%'");

          
        // return $data4;

          return view('vs_table')->withvalue($data)->withvalue1($data3)->withvalue2($data1)->withvalue3($data5)->withvalue3($data5);

        // return view('vs_table')->withvalue($data)->withvalue1($data3)->withvalue2($data1)->withvalue3($data5)->withvalue3($data5)->with('ram',$ram)->with('data6',$data6);
    }
    public function recommendation(Request $request) // for recommendation option
    {
        $cpu=$request->input('cpu');
        $gpu=$request->input('gpu');
        $data=DB::select("select name from games where cpu LIKE '%$cpu%' &&  gpu LIKE '%$gpu%'");
        return view('pra')->withvalue($data);
    }
    public function vs(Request $request) // for hardware comparison option
    {
        $h1=$request->input('h1');
        $h2=$request->input('h2');
        $h3=$request->input('check');
        if($h3==1)
        {
            $data=DB::select("select * from gpus where name LIKE '%$h1%'");
            $data2=DB::select("select * from gpus where name LIKE '%$h2%'");
            return view('gpu_table')->withvalue($data)->withvalue2($data2);
        }
        else
        {
            $data=DB::select("select * from admins where name LIKE '%$h1%'");
            $data2=DB::select("select * from admins where name LIKE '%$h2%'");
            return view('cpu_table')->withvalue($data)->withvalue2($data2);
        }
    }
}
