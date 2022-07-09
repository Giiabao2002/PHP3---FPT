@extends('components.layout')

@section('title')
    Danh Sach Tin
@endsection

@section('css')

<style>
    .card-title{
        font-size: 20px;
    }

    .card-text{
        font-size: 16px;
    }
</style>    
@endsection

@section('content')
    
<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    

<section class="home" id="home">

    <div class="content">
        <span class="hi"> danhsachtin </span>
        <h3> ĐÂY LÀ  <span> TRANG DANH SÁCH TIN</span> </h3>
        <div class="hot-post">
            <div class="" style="display: flex;flex-direction: row;flex-wrap: wrap;box-sizing: border-box">
                
                @foreach ($data as $tin)
                    <div style="flex-basis: 33.333%;margin:16px -12px;padding: 10px 12px;">
                        <a href="{{route('chitiettin',['id'=>$tin->id])}}" class="card w-100" style="color:black;">
                            <div class="card-body" style="padding: 0 20px;height: 100%;">
                                <img src="{{asset('images/no-image.png')}}" alt="no-image" style="width: 100%;">
                              <h4 class="card-title">{{$tin->tieuDe}}</h4>
                              <p class="card-text">{{$tin->tomTat}}</p>
                              <a href="{{ route('capnhattin', ['id'=>$tin->id]) }}" class="btn btn-primary">CẬP NHẬT</a>                              
                              <a href="{{ route('xoatin', ['id'=>$tin->id]) }}" class="btn btn-primary">XÓA</a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
          
    </div>
</section>
@endsection


