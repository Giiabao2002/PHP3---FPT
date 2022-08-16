<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSV;

class SvController extends Controller
{
    // Nạp Action Lưu SV
    public function sv(){
        return view('nhapsv');
    }   

    // action xử lý lưu thông tin sinh viên
    function sv_store(RuleNhapSV $request){
        echo "code xử lý nhập sinh viên";
    }
}
