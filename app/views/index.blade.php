<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

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
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">home</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">products</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">factory tours</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">solution</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">service</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">customer visit</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">about us</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">why us</button></a>
                <a href="#"><button type="button" class="btn btn-sky text-uppercase btn-lg">contact</button></a>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        {{--Carousel--}}
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox" id="carousel">
            <div class="item active">
              <img src="{{asset('img/banner1.jpg')}}" class="img-responsive" alt="...">
            </div>
            <div class="item">
              <img src="{{asset('img/banner2.jpg')}}" class="img-responsive" alt="...">
            </div>
          </div>
        </div>

        {{--product list--}}
        <div class="container" id="productList">
            <h4>PRODUCTS</h4>
        </div>
        <div class="container" id="productImg">
            <div class="row">
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="{{asset('img/index/1.jpg')}}" alt="...">
                  <div class="caption">
                    <h4 class="text-center">hot asphalt mixing plant
                                            LB3000 (240TPH) Asphalt Mixing Plant</h4>
                  </div>
                </a>
              </div>
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="{{asset('img/index/1.jpg')}}" alt="...">
                  <div class="caption">
                    <h4 class="text-center">hot asphalt mixing plant
                                            LB3000 (240TPH) Asphalt Mixing Plant</h4>
                  </div>
                </a>
              </div>
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="{{asset('img/index/1.jpg')}}" alt="...">
                  <div class="caption">
                    <h4 class="text-center">hot asphalt mixing plant
                                            LB3000 (240TPH) Asphalt Mixing Plant</h4>
                  </div>
                </a>
              </div>
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="{{asset('img/index/1.jpg')}}" alt="...">
                  <div class="caption">
                    <h4 class="text-center">hot asphalt mixing plant
                                            LB3000 (240TPH) Asphalt Mixing Plant</h4>
                  </div>
                </a>
              </div>
            </div>
        </div>

        <br>
        <div class="container">
        	<div class="row">
        		<div class="col-md-8" id="indextab">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"> >> ABOUT US</h3>
                            <span class="pull-right">

                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">

                                    <h3 class="text-center">Zhengzhou HANVY Machinery And <br/> Equipment Co., Ltd.</h3>
                                    <p>
                                    is the exportation department of Hanvy group of companies. Hanvy group of company is set up by 6 factories. The 6 factories are brothers companies located within Henan province, separately about 50-350km away from Zhengzhou the capital City of Henan province. In order to deal with commodity inspection, customs declaration, fast orders processing and urgent responds to the customer enquiries, quick responds to the customers after sales services, maintaining and satisfaction of the customers is our priority goal...
                                    </p>



                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                <div id="tour">
                    <h4>FACTORY TOUR</h4>
                    </div>
                    <div class="thumbnail">
                      <img src="{{asset('img/tour.jpg')}}" alt="...">
                      <div class="caption">
                        <p>Changchun Road11, Zhengzhou City, Henan Province,China</p>
                        <p><a href="#" class="btn btn-primary btn-lg" role="button">Contact Us</a></p>
                      </div>
                    </div>
                </div>
            </div>
        	</div>

        	<hr class="blueline" />

        	<div class="container">
        	    <ul class="list-inline text-center">
                      <li><a href="">Asphalt Mixing Plant</a></li>
                      <li>|</li>
                      <li><a href="">Concrete Mixing Plant</a></li>
                      <li>|</li>
                      <li><a href="">Products</a></li>
                      <li>|</li>
                      <li><a href="">Index</a></li>
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
