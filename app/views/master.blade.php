<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @section('title')
                 This is the master sidebar.
            @show
        </title>
        <meta name="description" content="@section('description')
                                             This is the master sidebar.
                                          @show">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="top">
            <div class="container">
                <a href="/"><img id="logo" src="{{asset('img/logo.jpg')}}" alt=""/></a>
                <p class="pull-right"><a href="">English</a>  |  <a href="">Pусский</a>  |  <a href="">中文</a></p>
            </div>
        </div>

        <nav class="nav navbar-default" role="navigation" id="nav">
          <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <a href="/"><button type="button" class="btn btn-sky text-uppercase btn-lg">home</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">products</button></a>
                <a href="{{url('tour')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">factory tours</button></a>
                <a href="{{url('solution')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">solution</button></a>
                <a href="{{url('service')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">service</button></a>
                <a href="{{url('customer_visit')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">customer visit</button></a>
                <a href="{{url('about')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">about us</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">why us</button></a>
                <a href="{{url('contact')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">contact</button></a>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        @yield('content')

        	<hr class="blueline" />

        	<div class="container">
        	    <ul class="list-inline text-center">
        	          <li><a href="">Index</a></li>
        	          <li>|</li>
        	          <li><a href="">Products</a></li>
                      <li>|</li>
                      <li><a href="">Asphalt Mixing Plant</a></li>
                      <li>|</li>
                      <li><a href="">Concrete Mixing Plant</a></li>
                      <li>|</li>

                      <li><a href="">Contact</a></li>
                </ul>
                <p class="text-center">Copyright © Zhengzhou Hanvy Machinery And Equipment Co., Ltd.</p>
        	</div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
