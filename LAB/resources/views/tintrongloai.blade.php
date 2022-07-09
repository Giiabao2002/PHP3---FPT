@extends('components.layout')

@section('title')
    {{ $tieudeloai }}
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
        <span class="hi"> tintrongloai </span>
        <h3> ĐÂY LÀ TRANG TIN TRONG LOẠI <span> {{ $tieudeloai }} </span> </h3>
        <div class="" style="display: flex;flex-direction: row;flex-wrap: wrap;box-sizing: border-box">

        @foreach ($data as $value)
        <div style="flex-basis: 33.333%;margin:16px -12px;padding: 10px 12px;">
            <a href="{{route('chitiettin',['id'=>$value->id])}}" class="card w-100" style="color:black;">
                <div class="card-body" style="padding: 0 20px;height: 100%;">
                    <img src="{{asset('images/no-image.png')}}" alt="no-image" style="width: 100%;">
                  <h4 class="card-title">{{$value->tieuDe}}</h4>
                  <p class="card-text"><b>Tóm tắt: </b>{{$value->tomTat}}</p>
                  <a href="#" class="btn btn-primary">See More</a>
                </div>
            </a>
        </div>
    @endforeach
    </div>
          
    </div>
</section>
@endsection