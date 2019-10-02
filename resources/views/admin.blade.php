

@extends('layout.app')
@section('content')

    <div class="row">
      <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <h1 class="text-center">
                    Only For Admins
                  </h1> 
                  
                   
                             
                   
                    <div class="card" style="width: 100rem;">
                    <div class="card mt-2 mb-3 green">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h1><a href="{{url('/newbarber')}}">Add New Barber</a></h1></li>
                        <li class="list-group-item"><h1><a href="{{url('/newblog')}}" >Add Blog</a></h1></li>
                        <li class="list-group-item"><h1><a href="{{url('/messages')}}">View Messages</a></h1></li>
                        <li class="list-group-item"> <h1><a href="{{url('/booking')}}" >View Appointments</h1></li>
                        <li class="list-group-item"> <h1><a href="{{url('/homepage')}}" target="_blank">Logout</h1></li>
                    </ul>
                    </div>
        </div>
                    

                    
                            
                       
                                             
        </div>
        </div>
    </div>
  
 @endsection