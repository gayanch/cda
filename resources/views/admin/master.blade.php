<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CDA</title>


    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/style.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
</head>
<body>

<div class="wrapper">


    <div class="row">
        @include('admin.partials.header')
        @include('admin.partials.sidebar')

        <section id="content-wrap" >

            <div class="row" id="content">
                <h1 class="head-title">@yield('title')</h1>
                @yield('content')
            </div>

        </section>
    </div>
    <footer id="main-footer"></footer>


</div>






<script src="{{URL::asset('plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="https://use.fontawesome.com/b5a00ce248.js"></script>
<script src="{{URL::asset('js/admin/scripts.js')}}"></script>
@yield('scripts')
</body>
</html>