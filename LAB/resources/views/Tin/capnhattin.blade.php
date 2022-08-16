@extends('components.layout')
@section('css')
<link rel="stylesheet" href="{{asset("css/formcss.css")}}">
@endsection

@section('title')
    Cập Nhật Tin
@endsection

@section('content')
    

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>

<div id="menu-bars" class="fas fa-bars"></div>

<form action="{{ route('capnhattin_',  ['id'=>$tin->id]) }}" method="POST" >
  @csrf
<div class="wrapper">
  <div class="title">
    Cập Nhật Tin
  </div>
  <div class="form">
     <div class="inputfield">
        <label>Tiêu Đề</label>
        <input name="tieuDe" value="{{ $tin->tieuDe }}" type="text" class="input">
     </div>  
    <div class="inputfield">
        <label>Url Hình</label>
        <input name="urlHinh" value="{{ $tin->urlHinh }}" type="text" class="input">
     </div>
     <div class="inputfield">
      <label>Tóm Tắt</label>
      <textarea name="tomTat" class="textarea">{{ $tin->tomTat }}</textarea>
   </div>  
      <div class="inputfield">
        <label>idLT</label>
        <div class="custom_select">
          <select name="idLT">
            <option value="1">Du lịch</option>
            <option value="3">Xã hội</option>
          </select>
        </div>
     </div> 
    {{-- <div class="inputfield terms">
        <label class="check">
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <p>Agreed to terms and conditions</p>
     </div>  --}}
    <div class="inputfield">
      <input type="submit" value="Cập Nhật Tin" class="btn">
    </div>
  </div>
</div>	
</form>
</div>

@endsection