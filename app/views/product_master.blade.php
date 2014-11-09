@extends('master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('content')
    <div id="content-page">

        <div class="container-fluid" id="product">
            <div class="content-wrapper">

                {{--产品图部分--}}
        		<div class="item-container">
        			<div class="container">
        				<div class="col-md-12">
        				        <ol class="breadcrumb">
                                  <li><a href="/">Home</a></li>
                                  <li><a href="{{url('products/all')}}">Products</a></li>
                                  <li><a href="{{url('products/mobile')}}">Mobile Asphalt Mixing Plant</a></li>
                                  <li class="active">Product Name</li>
                                </ol>
                                <hr id="breadcrumb"/>
        					<div class="product col-md-3 service-image-left">

        						<center>
        							<img id="item-display" src="@yield('productImg')" alt=""/>
        						</center>
        					</div>

        					<div class="container service1-items col-sm-2 col-md-2 pull-left">
        						<center>
        							<a id="item-1" class="service1-item">
        								<img src="@yield('productImg_1')" alt=""/>
        							</a>
        							<a id="item-2" class="service1-item">
        								<img src="@yield('productImg_2')" alt=""/>
        							</a>
        							<a id="item-3" class="service1-item">
        								<img src="@yield('productImg_3')" alt=""/>
        							</a>
        						</center>
        					</div>
                            <div class="col-md-7">
                                @yield('product_dec')

            					<hr>
            					<a href="mailto:nylyzj.com"><span class="glyphicon glyphicon-envelope"></span> Send a E-mail to Us</a> <br/>
            					<div class="btn-group cart">
            						<button type="button" class="btn btn-primary btn-lg">
            							<span class="glyphicon glyphicon-comment"></span> Get Prices
            						</button>
            					</div>

            				</div>
        				</div>
        			</div>
        		</div>

        		{{--产品详情部分--}}
        		<div class="container" id="content">
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


        			<div class="col-md-9 product-info">
        					<ul id="myTab" class="nav nav-tabs nav_tabs">

        						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
        						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
        						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

        					</ul>
        				<div id="myTabContent" class="tab-content">
        						<div class="tab-pane fade in active" id="service-one">

        							<section class="product-info">
        								@yield('product_content_1')
        							</section>

        						</div>
        					<div class="tab-pane fade" id="service-two">

        						<section class="product-info">
                                    @yield('product_content_2')
        						</section>

        					</div>
        					<div class="tab-pane fade" id="service-three">
        					    <section class="product-info">
                                    @yield('product_content_3')
                                </section>
        					</div>
        				</div>
                        <hr/>
                        <div id="contact">
                                    <div class="row">
                                        <h4>Please Fill Your Inquiry</h4>
                                        {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
                                        <div class="form-group">
                                            {{ Form::label('email', 'Email', array('class' => 'col-md-1 control-label')) }}
                                            <div class="col-md-6">
                                                <input required placeholder="youremail@example.com" class="form-control" name="email" type="email" id="email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('subject', 'Name', array('class' => 'col-md-1 control-label')) }}
                                            <div class="col-md-6">
                                                <input required placeholder="your name" class="form-control" name="subject" type="text" id="subject">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('message', 'Message', array('class' => 'col-md-1 control-label')) }}
                                            <div class="col-md-8">
                                                <textarea required class="form-control" rows="8" name="mes" cols="50"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-1 col-sm-10">
                                                {{ Form::submit('send a message', array('class' => 'btn btn-primary')) }}
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
                                <script>
                                $("form").validate();
                                </script>
                        </div>
        			</div>
        		</div>
        	</div>
        </div>


    </div>
@stop



