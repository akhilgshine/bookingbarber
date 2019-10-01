@extends('layout.app')
@section('content')
    <div class="container main-container">
        <div class="row">
            <div class="col-sm-12 bg-white" style="margin-bottom: 15px; padding-bottom: 20px;">
                <img src="/Images/banner-massages.jpg" class="img-responsive" alt="banner"
                     style="padding-top: 15px; margin-bottom: 15px; " />
                <h3 class="text-center">Book Now</h3>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        {!! Form::open(['url'=>'bookappointment/submit']) !!}

                        <div class="form-group">
                            <label> Name</label>
                            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name'])}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter email'])}}
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            {{Form::text('mobile','',['class'=>'form-control','placeholder'=>'Enter Mobile'])}}
                        </div>


                        <div class="row" style="margin-top: 15px;">
                            <div class="form-group col-md-6">
                                <label>Booking Type</label>
                                <select class="form-control booking_type" name="booking_type">
                                    @if($types)
                                        @foreach($types as $type )
                                            <option value={{$type->id}}>{{$type->type}}</option>


                                        @endforeach
                                    @endif
                                </select>
                                <div id="movie-data"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Barber</label>
                                <select class="form-control" name="barber">
                                    @foreach($barbers as $barber )
                                        <option value={{$barber->id}}>{{$barber->barbername}}</option>


                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label> Date</label>
                                <input type="date"class="form-control" id="datepicker" name="date">
                            </div>

                            <div class="form-group">
                                <label> Time</label>
                                <input type="text" class="form-control timepicker" name="time">
                            </div>



                        </div>


                        <button type="submit" class="btn btn-theme">Book Now</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




