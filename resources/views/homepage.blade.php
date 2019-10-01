@extends('layout.app')
@section('content')
    <div class="row">
        <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <div class="row">
                <div class="col-sm-6">
                    <img src="./Images/56d71cc82e5265b7008bac7d-750-563.jpg" class="img-responsive" />
                </div>
                <div class="col-sm-6" style="padding-top: 10%;">
                    <h1 class="text-center">
                        Welcome To Barberz!
                    </h1>
                    <div class="text-muted text-center">
                        <i class="fa fa-cut"></i>
                    </div>
                    <p class="text-center" style="font-size: 18px; margin-top: 15px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br /> Iure nesciunt nemo vel earum maxime neque!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Working Days</h1>

    <div class="row">
        <div class="wrapper_saloon">
            <div class="container">
                <ul class="slides_times">
                    <li class="ds_wtime">
                        <div class="ds_day">
                            MON
                        </div>
                        <div class="ds_whours">
                            09:00-17:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            MON
                        </div>
                        <div class="ds_whours">
                            09:00-17:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            wed
                        </div>
                        <div class="ds_whours">
                            09:00-17:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            thu
                        </div>
                        <div class="ds_whours">
                            10:00-20:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            fri
                        </div>
                        <div class="ds_whours">
                            10:00-18:00
                        </div>
                    </li>
                    <li class="ds_wtime">
                        <div class="ds_day">
                            sat
                        </div>
                        <div class="ds_whours">
                            08:00-13:00
                        </div>
                    </li>
                    <li class="ds_wtime closed">
                        <div class="ds_day">
                            sun
                        </div>
                        <div class="ds_whours">
                            CLOSED
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" style="padding-top: 30px; padding-bottom: 30px;">
            <h1 class="text-center">Our Blog</h1>
            <div class="text-center text-muted" style="padding-top: 15px; padding-bottom: 15px;"><i class="fa fa-cut"></i></div>
            <div class="row" style="margin-top: 15px; margin-bottom: 15px;">
                <!-- blog item -->
                <div class="col-sm-4">
                    <div class="bg-white">
                        <img src="./Images/bigstock-Barber-cutting-hair-with-sciss-32516945.jpg" class="img-responsive" />
                        <div class="p-1">
                            <a href="javascript: void(0);"><h4>Lorem ipsum dolor sit amet</h4></a>
                            <p><span class="text-muted">July 17, 2019</span> by <span class="text-theme">Admin</span></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                        </div>
                    </div>
                </div>
                <!-- blog item END -->
                <!-- blog item -->
                <div class="col-sm-4">
                    <div class="bg-white">
                        <img src="./Images/shutterstock_777407209-min.jpg" class="img-responsive" />
                        <div class="p-1">
                            <a href="javascript: void(0);"><h4>Lorem ipsum dolor sit amet</h4></a>
                            <p><span class="text-muted">July 17, 2019</span> by <span class="text-theme">Admin</span></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                        </div>
                    </div>
                </div>
                <!-- blog item END -->
                <!-- blog item -->
                <div class="col-sm-4">
                    <div class="bg-white">
                        <img src="./Images/GettyImages_92348095.0.jpg" class="img-responsive" />
                        <div class="p-1">
                            <a href="javascript: void(0);"><h4>Lorem ipsum dolor sit amet</h4></a>
                            <p><span class="text-muted">July 17, 2019</span> by <span class="text-theme">Admin</span></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
                        </div>
                    </div>
                </div>
                <!-- blog item END -->
            </div>
            <div class="text-center" style="padding-top: 7px;">
                <a href="#" class="btn btn-theme">View More</a>
            </div>
        </div>
    </div>

    </div>
@endsection