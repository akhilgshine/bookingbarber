@extends('layout.app')
@section('content')


        <div class="row">
            <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
                <div class="row">
                        <h1 class="text-center">
                                Gallery
                              </h1> 
                              <div class="text-muted text-center" style="margin-bottom: 35px;">
                                <i class="fa fa-cut"></i>
                              </div>
                    <!-- hair style  -->
                    @if($types)
                    <div class="col-sm-4 text-center">
                        @foreach($types as $type)

                        <img src="./Images/shutterstock_777407209-min.jpg" class="img-responsive" />
                        <h4 class="text-theme">{{$type->type}}</h4>
                            <h4 class="text-theme">Duration:{{$type->duration}}minutes</h4>
                            <h4 class="text-theme">Cost:{{$type->cost}}$</h4>


                        @endforeach


                        @else
                                <div class="text-muted text-center" style="margin-bottom: 35px;">
                                    <i class="fa fa-cut"></i>

                                    Nothing to Show !
                                </div>

                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection