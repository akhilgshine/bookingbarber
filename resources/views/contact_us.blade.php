@extends('layout.app')
@section('content')

    <div class="row">
      <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <h1 class="text-center">
                    Contact Us
                  </h1> 
                  <div class="text-muted text-center" style="margin-bottom: 35px;">
                    <i class="fa fa-cut"></i>
                  </div>
            <div class="row">
                    <div class="col-sm-6">
                            <h3 class="text-center" style="margin-bottom: 25px;">
                                    FIND US QUICKLY
                                  </h3> 
                                  <hr />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.061037281331!2d175.27695411531735!3d-37.76516697976116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d1884f6c5c635%3A0x7d26e0eb9706c29e!2s174%20Clarkin%20Rd%2C%20Fairfield%2C%20Hamilton%203214!5e0!3m2!1sen!2snz!4v1569197280109!5m2!1sen!2snz" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-sm-6">
                            <h3 class="text-center" style="margin-bottom: 25px;">
                                    Get in touch
                                  </h3> 
                                  <hr />
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                            {!! Form::open(['url'=>'contact/submit']) !!}

                            <div class="row" style="margin-top: 15px;">
                                <div class="form-group">
                                    <label> Name</label>
                                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name'])}}
                                </div>
                            </div>
                        <div class="row" style="margin-top: 15px;">

                            <div class="form-group">
                                <label>Email address</label>
                                {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email'])}}

                            </div>
                        </div>

                            <div class="row" style="margin-top: 15px;">
                                <div class="form-group ">
                                    <label>Message</label>
                                    {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Message'])}}

                                </div>
                            </div>
                        {{Form::submit('Submit',['class'=>'btn btn-theme'])}}
                        {!! Form::close() !!}


                    </div>
                </div>
      </div>
    </div>
  </div>
 @endsection