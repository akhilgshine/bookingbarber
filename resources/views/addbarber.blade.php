@extends('layout.app')
@section('content')

    <div class="row">
        <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <h1 class="text-center">
                Add Barber
            </h1>
            <div class="text-muted text-center" style="margin-bottom: 35px;">
                <i class="fa fa-cut"></i>
            </div>
            <div class="row">

                <div class="col-sm-8">

                    <hr />
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <h4>{{$errors->first()}}</h4>
                        </div>
                    @endif
                    {!! Form::open(['url'=>'barber/submit']) !!}

                    <div class="row" style="margin-top: 15px;">
                        <div class="form-group">
                            <label> Barber Name</label>
                            {{Form::text('barbername','',['class'=>'form-control','placeholder'=>'Enter Name'])}}
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