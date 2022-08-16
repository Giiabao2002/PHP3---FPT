<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    @yield('title')
    </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->

    <link rel="stylesheet" href={{asset("css/style.css")}}>
    {{-- cdn jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    @yield('css')
</head>

    <body>
        @include('components.sidebar')
        @yield('content')
        
        @yield('js')
        <script src={{asset("js/script.js")}}></script>
    </body>
</html>