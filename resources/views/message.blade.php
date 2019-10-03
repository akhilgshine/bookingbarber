<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--------------------------- STYLESHEETS ----------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Css/DesignStyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <!--------------------------- /STYLESHEETS ----------------------------->
    <title>BARBERZ</title>
</head>

<body>
<div class="container-fluid">
    <!--------------------------- NAVIGATION ----------------------------->
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


                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
      <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <h1 class="text-center">Messages</h1> 
                  

                   @if(count($messages)> 0 )
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

</div>

<footer class="footer bg-white">
    <div class="col-sm-12">
        <p class="text-center" style="margin: 0px;">Copyright 2019 Barberz | Bookings 07 856 7908 email</p>
    </div>
</footer>
</div>
</div>
</div>
<!--------------------------- JS Script ----------------------------->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>


<!--------------------------- /JS Script ----------------------------->
<script>

    $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '10',
        maxTime: '5:00pm',
        defaultTime: '10',
        startTime: '10:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
    $(document).ready(function () {


        $('.booking_type').on('change', function () {

            var type = $('.booking_type').val();
            var html='';


            $.ajax({
                type: "GET",
                url: "/getcost",
                data: {"type": type},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(result){
                    // $("#movie-data").text(result.employees.cost);


                }
            });

        })
    });
</script>
</body>

</html>