<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    //test
    function index(){
        $dsloai = DB::table('loaitin')
        ->get();
        return view('index',compact('dsloai'));
    }

    function lienhe(){
        return view('lienhe');
    }

    // action lấy tin
    function lay1tin($id){
        $data = ['id'=>$id];
        return view('chitiet', $data);
    }

    
}
