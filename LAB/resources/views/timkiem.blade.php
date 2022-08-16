@extends('components.layout')
@section('css')
<link rel="stylesheet" href="{{asset("css/timkiem.css")}}">
@endsection

@section('title')
    Tìm kiếm
@endsection

@section('content')

<form action="">
    <div class="wrapper">
        <div class="search-input">
          <a href="" target="_blank" hidden></a>
          <input type="text" id="search" placeholder="Type to search..">
          <div class="autocom-box">
            <!-- here list are inserted from javascript -->
          </div>
          <div class="icon"><i class="fas fa-search"></i></div>
        </div>
      </div>
</form>


{{-- đường dẫn trang js --}}
@section('js')
<link rel="stylesheet" href="{{asset("css/timkiem.js")}}">

{{-- jquery ajax --}}
<script>
    $("#search").change(function(){
        if(!$(this).val().trim()){
            $('.search-input').removeClass('active')
            $('.autocom-box').html('');
            return;
        }
  $.ajax({url: "{{route('search')}}",method:"post",data:{
    '_token':'{{csrf_token()}}',
    'q':$(this).val()
  }, success: function(result){
        if(!result){
            return;
        }

        $('.search-input').addClass('active')

        let data = result.map((item)=>{
            return `<li><a href="/tin/${item.slug}">${item.tieuDe}</a></li>`;
        })
        $('.autocom-box').html(data.join(''));
}});
});
</script>

@endsection

@endsection