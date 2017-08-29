<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input; //obtain get and post parameter by this


class test extends Controller
{
    //
    public function index(){
        $testData=DB::table('test')->get();
        return view('testview',['testInfo'=> 'show this','testData'=>$testData,'testdata1'=>'data1','testdata2'=>'data2']);
    }

    public function totestpage2(){
        $testData=DB::table('test')->get();
        $testdata1=Input::get('testdata1');
        return view('testview',['testInfo'=> 'show this','testData'=>$testData,'testdata1'=>$testdata1]);
    }

}
