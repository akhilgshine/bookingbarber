<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--------------------------- STYLESHEETS ----------------------------->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Css/DesignStyle.css" />
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700" rel="stylesheet">
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
          <a class="navbar-brand" href="#">BARBERZ</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navtheme navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Contact</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
            <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> User <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Log Out</a></li>
                  </ul>
                </li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--------------------------- /NAVIGATION ----------------------------->
    <div class="row" style="margin-top: 50px;">
      <img src="Images/banner-massages.jpg" class="img-responsive" />
    </div>

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
  <footer class="text-center" style="background-color: black; color: #fff; padding: 7px;">
    Copyright &copy; 2019 All rights reserved
  </footer>
  <!--------------------------- JS Script ----------------------------->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/094ea8effd.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--------------------------- /JS Script ----------------------------->
</body>

</html>