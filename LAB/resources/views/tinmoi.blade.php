@extends('components.layout')

@section('title')
    Tin Moi
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
        <span class="hi"> tinmoi </span>
        <h3> ĐÂY LÀ  <span> TRANG TIN MỚI</span> </h3>
        <div class="hot-post">
            <div class="" style="display: flex;flex-direction: row;flex-wrap: wrap;box-sizing: border-box">
                
                @foreach ($data as $value)
                {{-- {{dd($value)}} --}}
                    <div style="flex-basis: 33.333%;margin:16px -12px;padding: 10px 12px;">
                        <a href="{{route('chitiettin',['slug'=>$value->slug ?? null])}}" class="card w-100" style="color:black;">
                            <div class="card-body" style="padding: 0 20px;height: 100%;">
                                <img src="{{asset('images/no-image.png')}}" alt="no-image" style="width: 100%;">
                              <h4 class="card-title">{{$value->tieuDe}}</h4>
                              <p class="card-text"><b>Ngày đăng: </b>{{$value->ngayDang}}</p>
                              <a href="#" class="btn btn-primary">Xem thêm</a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
          
    </div>
</section>
@endsection


