<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // cho phép các request hoạt động
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // code phần validate cho nhập sinh viên
        return [
            'masv'=>['required', 'regex:/^PS\d{5}/'],
            'hoten'=>['required', 'min:3', 'max:20'],
            'tuoi'=>'required|integer|min:16|max:100',
            'ngaysinh'=>['required','regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'cmnd'=>'digits_between:9,10',
            'email'=>'email|ends_with:@fpt.edu.vn'
        ];
    }

    //định nghĩa các chuỗi báo lỗi thân thiện 
    function messages()
    {
        return [
            'masv.required'=>'Mã SV chưa nhập',
            'masv.regex'=>'Mã SV không đúng định dạng',
            'hoten.required'=>'Chưa nhập họ tên nè',
            'hoten.min'=>'Họ tên ngắn quá dài thêm đi',
            'hoten.max'=>'Họ tên dài quá ngắn lại đi',
            'tuoi.required'=>'Chưa nhập tuổi nè',
            'tuoi.integer'=>'Thuổi phải là số nguyên',
            'tuoi.min'=>'Chưa đủ tuổi nè',
            'tuoi.max'=>'Đủ tuổi rồi nè',
            'ngaysinh.required'=>'Chưa nhập ngày sinh nè',
            'ngaysinh.regex'=>'Ngày sinh không đúng định dạng',
            'cmnd.digits'=>'CMND có đúng không vậy',
            'cmnd.beween:9,10'=>'CMND phải từ 9 đến 10 ký tự',
            'email.ends_with:@fpt.edu.vn'=>'Email phải có đuôi @fpt'
        ];
    }

    function attributes()
    {
        return [
            'masv'=>'Mã Sinh Viên',
            'hoten'=>'Họ Tên',
            'tuoi'=>'Tuổi',
            'ngaysinh'=>'Ngày Sinh',
            'cmnd'=>'Chứng Minh Nhân Dân',
            'email'=>'email'
        ];
    }
}
