<?php

namespace App\Http\Controllers;
use App\Models\Test;
use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::select('select * from datas');
        return view('list',['data'=>$data]);
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('datas')->where('date','like','%'.$search.'%')
                    ->orwhere('location','like','%'.$search.'%')
                    ->orwhere('time','like','%'.$search.'%')->paginate(5);

        return view('/list',['data'=>$data]);
    }
}
