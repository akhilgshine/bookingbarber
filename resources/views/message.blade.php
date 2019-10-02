

@extends('layout.app')
@section('content')

    <div class="row">
      <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <h1 class="text-center">Messages</h1> 
                  
                   
                             
                   @if(count($messages)> 1 )
                    @foreach($messages as $message)
                    <div class="card" style="width: 100rem;">
                    <div class="card mt-2 mb-3 green">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h1>Name:{{$message->name}}</h1></li>
                    <li class="list-group-item"><h1>Email:{{$message->email}}</h1></li>
                    <li class="list-group-item"><h1>Message:{{$message->message}}</h1></li>
                    <li class="list-group-item"> <h1>Received at:{{$message->created_at}}</h1></li>
                    </ul>
     </div>
    </div>
                    
    </br>
                    @endforeach
                    @else
                         <p>No messages found</p>
                    @endif            
             
                    
                            
                       
                                             
                </div>
        </div>
    </div>
  
 @endsection