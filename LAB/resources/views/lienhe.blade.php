@extends('components.layout')

@section('title')
    Tin Trong Loại
@endsection

@section('content')
    

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>



<div id="menu-bars" class="fas fa-bars"></div>
    
<section class="home" id="home">

    <div class="content">
        <span class="hi"> tintrongloai </span>
        <h3>ĐÂY LÀ TRANG TIN TRONG LOẠI</h3>
        <div class="hot-post">
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


</body>
</html>