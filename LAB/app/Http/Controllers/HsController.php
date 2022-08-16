<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HsController extends Controller
{
    // định nghĩ action nạp view()
    public function hs(){
        return view('nhaphs');
    }

    // action validate form nhập
    function hs_store(Request $request){
        // Yêu cầu kiểm tra dữ liệu theo
        // Họ tên: có độ dài từ 3 đến 20 ký tự
        // Tuổi: bắt buộc phải nhập là số nguyên có giá trị phải nhập từ 16 đến 100 ký tự
        // Ngày sinh: phải nhập kiểu theo định dạng ngày
        $request->validate([
            'hoten'=>['required', 'min:3', 'max:20'],
            'tuoi'=>'required | integer | min:16 | max:100 ',
            'ngaysinh'=>['required','date'],
        ]); echo "code xử lý"; 
    }
}
