<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use Illuminate\Http\Request;

class Tin2Controller extends Controller
{
    function index2(){
        $tin = new Tin();
        // paginate lấy 15 từ bảng rồi sắp xếp theo mới nhất
        $data = $tin->orderByDesc('created_at')->paginate(15);
        return view('Tin/danhsach', ['data'=>$data]);
    }

    // action thêm tin trả về hiển thị
    function them(){
        return view("Tin/themtin");
    }

    // action thực hiện thêm tin
    function them_(){
        $t = new Tin;
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/danhsachtin');
    }

    // action cập nhật tin trả về hiển thị
    function capnhat($id){
        $t = Tin::find($id);
        if ($t == null) return redirect('/thongbao');
        return view('Tin/capnhattin', ['tin'=>$t]);
    }

    // action cập nhật tin
    function capnhat_($id){
        $t = Tin::find($id);
        if ($t == null) return redirect('/thongbao');
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/danhsachtin');    
    }


    // action xóa tin
    function xoa($id){
        $t = Tin::find($id);
        if ($t == null) return redirect('/thongbao');
        $t->delete('/danhsachtin');
        return redirect()->route('danhsachtin');
    }

}
