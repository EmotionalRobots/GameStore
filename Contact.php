 <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- <?php
            include("connect.php");
            ?> -->

            <style>
    #logo {
        max-width: 75%;
        max-height: 75%;
    }
    </style>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Contact</title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/shop-homepage.css" rel="stylesheet">

        </head>

        <body  >

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="checkOut.php">Check Out</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

            <!-- Page Content -->
            <div class="container">

                <div class="row">

                    <div class="col-md-3">
                        <p class="lead">Contact</p>
                        <div class="list-group">
                                                    <img id = "logo" src="pictures/logo.jpg" alt="">


                        </div>
                    </div>

                    <div class="col-md-9">

                        <div class="row carousel-holder">

                            <div class="col-md-12">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img class="slide-image" src="pictures/cars_800x300.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="pictures/ps4_800x300.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="slide-image" src="pictures/xbox_800x300.jpg" alt="">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div id="contactForm" class="row">
                            <div class="row">
                              <div class="col-md-9 col-md-offset-1">
                                <div class="well well-sm">
                                <form target="_blank" class="form-horizontal" action="contactSubmission.php" method="post">
                                      <input type="hidden" name="customerID" value="1">
                                      <fieldset>
                                        <legend class="text-center">Contact us</legend>
                                        <!-- Name input-->
                                        <div class="form-group">
                                          <label class="col-md-3 control-label" for="name">Name</label>
                                          <div class="col-md-9">
                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Email input-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                      <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="message">Your message</label>
                                  <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                              <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>
<div id = "alert"></div>

</div>

</div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <!-- <p>Copyright &copy; 2017</p> -->
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->

<p id = "testArea"></p>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="js/myScripts.js"></script>


</body>

</html>
