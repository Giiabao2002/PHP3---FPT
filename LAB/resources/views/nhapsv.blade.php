@extends('components.layout')
@section('css')
<link rel="stylesheet" href="{{asset("css/formcss.css")}}">
@endsection

@section('title')
    Nhập Sinh Viên
@endsection

@section('content')
    

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>

<div id="menu-bars" class="fas fa-bars"></div>

{{-- validate form nhập --}}
@if ($errors->any())
    <div style="color: red;font-size: 12px"  class="wrapper">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('sv_store') }}" method="POST" >
  @csrf
<div class="wrapper">
  <div class="title">
    Nhập Thông Tin Sinh Viên
  </div>
  <div class="form">
     <div class="inputfield">
        <label>Mã Sinh Viên</label>
            <div style="display: flex; flex-direction: column; width: 100%">
               @error('masv')
                  <span class="alert alert-danger">{{ $message }}</span>
               @enderror
               <input name="masv" type="text" class="input" value="{{ old('masv') }}">
            </div>
     </div>
     <div class="inputfield">
      <label>Họ Tên</label>
          <div style="display: flex; flex-direction: column; width: 100%">
             @error('hoten')
                <span class="alert alert-danger">{{ $message }}</span>
             @enderror
             <input name="hoten" type="text" class="input" value="{{ old('hoten') }}">
          </div>
   </div>
   <div class="inputfield">
      <label>Tuổi</label>
          <div style="display: flex; flex-direction: column; width: 100%">
             @error('tuoi')
                <span class="alert alert-danger">{{ $message }}</span>
             @enderror
             <input name="tuoi" type="text" class="input" value="{{ old('tuoi') }}">
          </div>
   </div> 
   <div class="inputfield">
      <label>Ngày Sinh</label>
          <div style="display: flex; flex-direction: column; width: 100%">
             @error('ngaysinh')
                <span class="alert alert-danger">{{ $message }}</span>
             @enderror
             <input name="ngaysinh" type="text" class="input" value="{{ old('ngaysinh') }}">
          </div>
   </div>  
   <div class="inputfield">
      <label>CMND</label>
          <div style="display: flex; flex-direction: column; width: 100%">
             @error('cmnd')
                <span class="alert alert-danger">{{ $message }}</span>
             @enderror
             <input name="cmnd" type="text" class="input" value="{{ old('cmnd') }}">
          </div>
   </div>      
   <div class="inputfield">
      <label>Email</label>
          <div style="display: flex; flex-direction: column; width: 100%">
             @error('email')
                <span class="alert alert-danger">{{ $message }}</span>
             @enderror
             <input name="email" type="text" class="input" value="{{ old('email') }}">
          </div>
   </div> 
    <div class="inputfield">
      <input type="submit" value="Lưu thông tin" class="btn">
    </div>
  </div>
</div>	
</form>
</div>

@endsection