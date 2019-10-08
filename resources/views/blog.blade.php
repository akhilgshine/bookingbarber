@extends('layout.app')
@section('content')

    <div class="row" style="margin-top: 50px;">
        <img src="./Images/banner-massages.jpg" class="img-responsive" />
    </div>

    <div class="row">
        <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <div class="row">
                <h1 class="text-center">
                    Blog
                </h1>
                <div class="text-muted text-center" style="margin-bottom: 35px;">
                    <i class="fa fa-cut"></i>
                </div>
                <!-- blog item -->
                @if(count($blogs)> 0 )
                    @foreach($blogs as $blog)
                        <div class="col-sm-4 blog-item">
                            <div class="bg-white">
                            <!-- <div class="img-responsive">{{$blog->image}}</div> -->
                                <img id="image" src="{{asset('images/'.$blog->image)}}"/>
                                <div class="p-1">
                                    <a href="javascript: void(0);"><h1>{{$blog->title}}</h1></a>

                                    <p><h4>{{$blog->description}}</h4></p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else
                    <p>No Blogs </p>
            @endif
            <!-- blog item END -->

            </div>
        </div>
    </div>
    </div>


@endsection