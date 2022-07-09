@extends('components.layout')

@section('title')
    Trang chủ
@endsection

@section('content')
    

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>

<section class="home" id="home">
    
    <div class="content">
        <span class="hi"> Xin chào... </span>
        <h3> Bạn đang ở  <span> Trang chủ </span> </h3>
        <p class="info"> Khám phá ngay </p>
        <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias quidem excepturi natus iste ut. Alias, quod? Earum pariatur obcaecati dolorum! </p>
        <a href="#about" class="btn">Khám phá</a>
    </div>
    
</section>


<section class="service" id="service">
    
    <h1 class="heading"> <span> TIN </span> TRONG LOẠI </h1>
    
    <div class="box-container">
        @foreach ($dsloai as $value)    
        <a href="{{ route('tintrongloai', ['id'=>$value->id]) }}" class="box">
            <i class="fas fa-code"></i>
            <h3>{{$value->ten}}</h3>
            <p>{{$value->id}}</p>
        </a>
        @endforeach

    </div>
    
</section>


@endsection