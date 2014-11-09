@extends('master')

@section('title')
    This is title.
@stop

@section('description')
    This is description.
@stop

@section('content')
    @yield('topimg')

    <div class="container" id="content">
        <div class="row">
            {{--sidebar--}}
            <div class="col-md-3">
                <div id="sidetitle">
                    <h4>PRODUCTS LIST</h4>
                </div>
                <div class="list-group">
                  <a href="{{url('products/all')}}" class="list-group-item">All Products</a>
                  <a href="{{url('products/mobile')}}" class="list-group-item">Mobile Asphalt Mixing Plant</a>
                  <a href="{{url('products/stationary')}}" class="list-group-item">Stationary Asphalt Mixing Plant</a>
                </div>

                <div class="well">
                    <h4>NEED HELP?</h4>
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-comment"></span> chat now
                    </button>
                    <span>(Chat Online)</span>
                    <br/><br/>
                    <p>or Email to us:</p>
                    <a href="mailto:info@nylyzj.com"><span class="glyphicon glyphicon-envelope"></span> info@nylyzj.com</a>
                    <br/><br/>
                    <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.jpg')}}" class="img-responsive img-rounded center-block" alt=""/></a>
                </div>
                <div>
                    <a href=""><img src="{{asset('img/whyus.jpg')}}" class="img-responsive img-rounded" alt=""/></a>
                </div>
            </div>

            <div class="col-md-9" id="content-page">
                @yield('content_page')
            </div>
        </div>
    </div>
@stop




