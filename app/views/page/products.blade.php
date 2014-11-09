@extends('sidebar_master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/product.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
    {{--产品列表标题--}}
    @if($category == 'all')
        <h4>All Products</h4>
    @elseif($category == 'mobile')
        <h4>Mobile Asphalt Mixing Plant</h4>
    @elseif($category == 'stationary')
        <h4>Stationary Asphalt Mixing Plant</h4>
    @endif
        <hr/>

    {{--产品列表--}}
    @if($category == 'all')
    <h4>Mobile Asphalt Mixing Plant</h4>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/mobile')}}" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>
    <h4>Stationary Asphalt Mixing Plant</h4>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>

    @elseif($category == 'mobile')
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/mobile')}}" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>
    @elseif($category == 'stationary')
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Headquarter office building   </p>
                      </div>
                    </a>
                  </div>
                </div>
        <hr/>
    @endif
    </div>
@stop



