@extends('layout.client-layout-v2',['page_title' => 'Error'])

@section('content')
    <head>
        <link href="{{asset('css/404.css')}}" rel="stylesheet" type="text/css" media="all">
        {{--<link href="/assets/css/font-awesome.css" rel="stylesheet">--}}
        <link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <h1>error!!!</h1>
    </div>
    <div class="w3-main">
        <div class="agile-info ">
            <h3>SORRY</h3>
            <h2>404</h2>
            <p>An error Occurred in the Application And Your Page could not be Served.</p>

            <a href="/xem-gio-hang">go back</a>
        </div>

    </div>
    {{--<div class="footer-w3l">--}}
    {{--<p>&copy; 2018 Error Page. All rights reserved | Design by <a href="admin/category">Sea Fashion</a></p>--}}
    {{--</div>--}}

    </body>
@endsection