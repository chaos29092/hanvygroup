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
                                <h3 class="panel-title"> ABOUT US</h3>
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
                            <p><a href="{{url('contact')}}" class="btn btn-primary btn-lg" role="button">Contact Us</a></p>
                          </div>
                        </div>
                    </div>
                </div>
            	</div>
@stop




