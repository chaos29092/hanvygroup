@extends('master')

@section('title')
    This is title.
@stop

@section('description')
    This is description.
@stop

@section('content')
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
                <h3>PRODUCTS</h3>
            </div>
            <div class="container" id="productImg">
                <div class="row">
                  <div class="col-xs-6 col-md-3">
                    <a href="{{url('product/mobile')}}" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <h5 class="text-center">hot asphalt mixing plant
                                                LB3000 (240TPH) Asphalt Mixing Plant</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <a href="{{url('product/mobile')}}" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <h5 class="text-center">hot asphalt mixing plant
                                                LB3000 (240TPH) Asphalt Mixing Plant</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <h5 class="text-center">hot asphalt mixing plant
                                                LB3000 (240TPH) Asphalt Mixing Plant</h5>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <h5 class="text-center">hot asphalt mixing plant
                                                LB3000 (240TPH) Asphalt Mixing Plant</h5>
                      </div>
                    </a>
                  </div>
                </div>
            </div>

            <br>
            <div class="container">

            <div class="row" id="indexmessage">
            <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            	<div class="row panel">
            		<div class="col-md-4 bg_blur ">
                	    <a href="{{url('contact')}}" class="follow_btn hidden-xs">Contact</a>
            		</div>
                    <div class="col-md-8  col-xs-12">
                       <img src="{{asset('img/index_logo.jpg')}}" class="img-thumbnail picture hidden-xs" />
                       <img src="{{asset('img/index_logo.jpg')}}" class="img-thumbnail visible-xs picture_mob" />
                       <div class="header">
                            <h2>ABOUT US</h2>
                            <h4>Zhengzhou HANVY Machinery And Equipment Co., Ltd.</h4>
                            <span>is the exportation department of Hanvy group of companies. Hanvy group of company is set up by 6 factories. The 6 factories are brothers companies located within Henan province, separately about 50-350km away from Zhengzhou the capital City of Henan province. In order to deal with commodity inspection, customs declaration, fast orders processing and urgent responds to the customer enquiries, quick responds to the customers after sales services, maintaining and satisfaction of the customers is our priority goal...</span>
                       </div>
                    </div>
                </div>


            </div>
            </div>

            	{{--<div class="row">--}}
            		{{--<div class="col-md-8" id="indextab">--}}
                        {{--<div class="panel panel-primary">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h3 class="panel-title">SERVICE</h3>--}}
                                {{--<span class="pull-right">--}}

                                {{--</span>--}}
                            {{--</div>--}}
                            {{--<div class="panel-body well">--}}
                                {{--<div class="tab-content">--}}
                                        {{--<img src="{{asset('img/top_service.jpg')}}" alt=""/>--}}
                                        {{--<h5>--}}
                                        {{--Hanvy provides installation,debugging service and easy wear parts--}}
                                        {{--</h5>--}}
                                        {{--<p><small>We offer modeling test and test report for large final equipments, the customer is invited to our factory for visiting and observing the test.--}}
                                           {{--Hanvy offers on-site field service for installation and debugging. Hanvy is committed to having all easy wear parts on hand to keep your project running.</small></p>--}}


                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div id="tour">--}}
                        {{--<h4>FACTORY TOUR</h4>--}}
                        {{--</div>--}}
                        {{--<div class="thumbnail well">--}}
                          {{--<img src="{{asset('img/tour.jpg')}}" alt="...">--}}
                          {{--<div class="caption">--}}
                            {{--<p>Changchun Road11, Zhengzhou City, Henan Province,China</p>--}}
                            {{--<p><a href="{{url('contact')}}" class="btn btn-primary btn-lg" role="button">Contact Us</a></p>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
@stop




