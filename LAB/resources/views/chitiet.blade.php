@extends('components.layout')

@section('title')
    laytin1tin
@endsection

@section('content')
    

<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>



<div id="menu-bars" class="fas fa-bars"></div>
    
<section class="home" id="home">

    <div class="content">
        <span class="hi"> tinxemnhieu </span>
        <h3> ĐÂY LÀ TRANG CHI TIẾT CỦA TIN CÓ ID LÀ  <span> {{ $id }} </span></h3>
        <div class="hot-post">
            {{-- <div class="" style="display: flex;flex-direction: row;flex-wrap: wrap;box-sizing: border-box">
                
            </div> --}}
        </div>
          
    </div>
</section>


</body>
</html>