@extends('sidebar_master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/service.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>SERVICE</h4>
        <hr/>
        <p class="text-primary"><strong>Pre-sale Service:</strong></p>
        <p>Our professional service staff for technical consulting is on line 24 hours. They guide customer choose what they need, not the most expensive, but the most suitable. A special questionnaire for crane and hoist we provide, will help us produce the most suitable and economic customized equipments .</p>

        <p class="text-primary"><strong>Sale Service:</strong></p>
        <dl>
          <dt>Model and specification:</dt>
          <dd>By means of communicating with customers sufficiently, measuring and analyzing the condition of customer’s working site and the detailed request for equipments, such as brand for motor and reducer and etc., we confirm the model and the specification of machinery step by step.</dd>
          <dt>Drawing:</dt>
          <dd>The drawing for assembly and foundation is available. All necessary files, such as packing list, delivering list, drawings will be sent to customer.</dd>
          <dt>Modeling test:</dt>
          <dd>We offer modeling test and test report for large final equipments, the customer is invited to our factory for visiting and observing the test.</dd>
        </dl>

        <p class="text-primary"><strong>After-sale Service: </strong></p>
        <dl>
            <dt>Installation and debugging: </dt>
            <dd>For all projects and customers, Hanvy offers on-site field service for installation and debugging . As your request, Hanvy provides the most comprehensive training for the operating and maintenance too. Our certified and accredited trainers help to ensure the high level of expertise.  With the field service, we are confident to enable Hanvy customer to use our machines free of any worry. </dd>
            <dt>Maintenance solution:</dt>
            <dd>You may have the best-trained, most safety conscious operators, but if your cranes and hoists are not properly inspected and maintained, you could suffer expensive failures and accidents - that could be prevented.  So for a long period, we give a proposal on maintenance solutions. </dd>
            <dt>Easy-wear parts: </dt>
            <dd>we maintain an extensive spare parts inventory for all our equipment. From the smallest bearing to the most complex circuit board, Hanvy is committed to having all parts on hand to keep your project running. We are well stocked with a full inventory list of spare parts, components and accessories to support our clientele with the products they purchase from us.</dd>
        </dl>

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
        <hr/>
    </div>
@stop



