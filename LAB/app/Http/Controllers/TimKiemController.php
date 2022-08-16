<?php

namespace App\Http\Controllers;

use App\Models\tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimKiemController extends Controller
{
    private $tin;

    // lấy model
    public function __construct(tin $tin)
    {
        $this->tin = $tin;
    }

    // trả về trang tìm kiếm
    public function timkiem(){
        return view('timkiem');
    }

    public function search(Request $request)
    {
        $q = $request->except('_token')['q'];
        $data = $this->tin->select('tieuDe','slug')->where('tieuDe','like','%'.$q.'%')->limit(5)->get();
        return $data;
    }
}
