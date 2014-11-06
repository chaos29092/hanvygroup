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
                  <a href="#" class="list-group-item active">
                    Asphalt Mixing Plant
                  </a>
                  <a href="#" class="list-group-item">Asphalt Mixing Plant</a>
                  <a href="#" class="list-group-item">Asphalt Mixing Plant</a>
                  <a href="#" class="list-group-item">Asphalt Mixing Plant</a>
                  <a href="#" class="list-group-item">Asphalt Mixing Plant</a>
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
                    <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.gif')}}" alt=""/></a>
                </div>
                <div>
                    <a href=""><img src="{{asset('img/whyus.jpg')}}" class="img-responsive" alt=""/></a>
                </div>
            </div>

            <div class="col-md-9" id="content-page">
                @yield('content_page')
            </div>
        </div>
    </div>
@stop




