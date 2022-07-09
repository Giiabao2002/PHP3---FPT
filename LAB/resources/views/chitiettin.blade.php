@extends('components.layout')

@section('title')
    Chi Tiet Tin
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
        <span class="hi"> chitiettin </span>
        <div class="hot-post">
            <div class="" style="display: flex;flex-direction: row;flex-wrap: wrap;box-sizing: border-box">
            <h3> {{ $tin->tieuDe }} </h3>
            <h4> {{ $tin->tomTat }} </h4>
            <p id="noidung"> {!! $tin->noiDung !!} </p>
        </div>
    </div>
</section>


</body>
</html>