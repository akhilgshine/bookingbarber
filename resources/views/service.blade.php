<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--------------------------- STYLESHEETS ----------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
            <img src="./Images/banner-massages.jpg" class="img-responsive" />
        </div>

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
                    {{$type}}
                    <div class="col-sm-4 text-center">
                        <img src="./Images/shutterstock_777407209-min.jpg" class="img-responsive" />
                        <h4 class="text-theme">RUGGED STYLE</h4>
                    </div>
                    <!-- hair style End -->
                    <!-- hair style  -->
                    <div class="col-sm-4 text-center">
                        <img src="./Images/bigstock-Barber-cutting-hair-with-sciss-32516945.jpg" class="img-responsive" />
                        <h4 class="text-theme">CLOSE CUT</h4>
                    </div>
                    <!-- hair style End -->
                    <!-- hair style  -->
                    <div class="col-sm-4 text-center">
                        <img src="./Images/GettyImages_92348095.0.jpg" class="img-responsive" />
                        <h4 class="text-theme">SKIN FADE</h4>
                    </div>
                    <!-- hair style End -->
                    <!-- hair style  -->
                    <div class="col-sm-4 text-center">
                        <img src="./Images/shutterstock_777407209-min.jpg" class="img-responsive" />
                        <h4 class="text-theme">RUGGED STYLE</h4>
                    </div>
                    <!-- hair style End -->
                    <!-- hair style  -->
                    <div class="col-sm-4 text-center">
                        <img src="./Images/bigstock-Barber-cutting-hair-with-sciss-32516945.jpg" class="img-responsive" />
                        <h4 class="text-theme">CLOSE CUT</h4>
                    </div>
                    <!-- hair style End -->
                    <!-- hair style  -->
                    <div class="col-sm-4 text-center">
                        <img src="./Images/GettyImages_92348095.0.jpg" class="img-responsive" />
                        <h4 class="text-theme">SKIN FADE</h4>
                    </div>
                    <!-- hair style End -->
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!--------------------------- /JS Script ----------------------------->
</body>

</html>