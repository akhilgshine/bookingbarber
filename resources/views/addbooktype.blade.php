@extends('layout.app')
@section('content')

    <div class="row">
      <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
      <nav class="navbar navbar-theme navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>


                </button>
                <a class="navbar-brand" href="{{url('adminhome')}}">BARBERZ</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navtheme navbar-nav navbar-right">
                    <li><a href="{{url('message')}}">Messages</a></li>
                    <li><a href="{{url('addbarber')}}">Add Barber</a></li>
                    <li><a href="{{url('newblog')}}">Add Blog</a></li>
                    <li><a href="{{url('/homepage')}}">Logout</a></li>


                </ul>
            </div>
        </div>
    </nav>
            <h1 class="text-center">
                    Add Booking Type
                  </h1>
                  <div class="text-muted text-center" style="margin-bottom: 35px;">
                    <i class="fa fa-cut"></i>
                  </div>
            <div class="row">
                   
                    <div class="col-sm-6">
                            
    
                        {{ Form::open(array('url' => 'addbooktype/submit')) }}
                        <div class="form-group">
                        <label> Type</label>
                        {{Form::text('type','',['class'=>'form-control','placeholder'=>'Enter Type'])}}
                        </div>
                        <div class="form-group">
                        <label> Cost</label>
                        {{Form::text('cost','',['class'=>'form-control','placeholder'=>'Enter cost'])}}
                         
                         </div>
                          <div class="form-group">
                        <label> Duration</label>
                        {{Form::text('duration','',['class'=>'form-control','placeholder'=>'Enter Duration'])}}
                        </div>  
                        {{Form::submit('Submit',['class'=>'btn btn-theme'])}}
                        {{ Form::close() }}   


                    </div>
                </div>
      </div>
    </div>
  </div>
 @endsection