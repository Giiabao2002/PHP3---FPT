<header>

    <a href="#" class="logo"> <span>NGUYỄN ĐINH<br></span>GIA BẢO</a>

    <nav class="navbar">
        <a href="{{ route('trangchu') }}">TRANG CHỦ</a>
        <a href="{{ route('tinmoi') }}">TIN MỚI</a>
        <a href="{{ route('thongtinsv') }}">THÔNG TIN SV</a>
        <a href="{{ route('tinxemnhieu') }}">TIN XEM NHIỀU</a>
        <a href="{{ route('danhsachtin') }}">DANH SÁCH TIN</a>
    </nav>

    <div class="follow">
        <h2 style="color:aliceblue; ">QUẢN TRỊ ADMIN</h2><br>
        <a href="{{ route('danhsachtin') }}" class="fa fa-th-large"></a>
        <a href="{{ route('themtin') }}" class="fa fa-plus-circle"></a>
        <a href="#" class="fa fa-user-circle"></a>
    </div>

</header>
