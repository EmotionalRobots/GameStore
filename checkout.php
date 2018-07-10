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

            <title>Checkout</title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/shop-homepage.css" rel="stylesheet">
            <script src="js/myScripts.js"></script>

        </head>

        <body>

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
                </div>
            </nav>

            <!-- Page Content -->
            <div class="container">

                <div class="row">

                    <div class="col-md-3">
                        <p class="lead">Checkout</p>
                        
                        <div class="list-group">
                        <img id = "logo" src="pictures/logo.jpg" alt="">
                        <!-- <p>LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO LOGO</p>
                            <p>Thank you for shopping with us! We offer a minumum warranty on all games on our product line. If you are not 100% satisfied with your order, you are entitled to a FULL refund. And we will even pay for shipping! That's how confident we are that you will enjoy each game we offer, and the entire purchases process with GameStore.</p> -->
                        </div>
                    </div>

                    <div class="col-md-8">
                    

                        <!-- h2>Enter your payment information</h2>
                        <h1> Final Check Out Form <br/> (This form will be loaded into mySQL) </h1> -->
                    </header>
                    <!-- <hr> -->

                    <div id="content" >
                        <h2>You're almost done...</h2>
                        <h4>Enter your payment information</h4>
                        <p></p>
                        <div class="row">
                            <div class="col-md-4">


                                <!-- <p>Copyright &copy; 2017</p> -->
                                
                                


                                <form name="CheckoutForm" action="formSubmission.php" method="post" onsubmit="return validateForm()" >                          <div class="form-group">
                            <!-- <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                          </label>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button> -->
                      <!--                             -->
                      <fieldset id="contact">
                        <legend>Billing/Shipping Information</legend>
                        <div class="form-group">
                            <label for="firstName">First name:</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value=""><span id="firstNameReq"></span>
                        </div>
                        <div class="form-group">

                            <label for="lastName">Last name:</label>
                            <input class="form-control"type="text" id="lastName" name="lastName" value=""><span id="lastNameReq"></span>
                        </div>
                        <div class="form-group">

                            <label for="faddress"> Address:</label>
                            <input class="form-control"type="text" id="faddress" name="address" value=""><span id="addressReq"></span>
                        </div>           

                        <div class="form-group">


                            <label for="faddress"> State:</label>
                            <input class="form-control"type="text" id="fState" name="state" value=""><span id="stateReq"></span>
                        </div>
                        <div class="form-group">


                            <label for="faddress"> City:</label>
                            <input class="form-control"type="text" id="fCity" name="city" value=""><span id="cityReq"></span>
                        </div>                        <div class="form-group">

                        <div class="form-group">

                            <label for="faddress"> Zip:</label>
                            <input class="form-control"type="text" id="fzip" name="zip" value=""><span id="zipReq"></span>
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="fCardNumber"> Credit Card Number:</label>
                        <input class="form-control"type="text" id="fCardNumber" name="cardNumber" value=""><span id="cardReq"></span>
                    </div>

                    <div class="form-group">

                        <label for="fSecCode"> 3 digit security code:</label>
                        <input class="form-control"type="text" id="fsecCode" name="secCode" value=""><span id="secCodeReq"></span>
                    </div>

                </fieldset>
                <fieldset>
                    <p>Choose your additional selections:
                        <p>
                            <input id="warranty" type="checkbox" name="warranty" value="warrantyValue" checked>
                            <label for="warrantyValue">Include 2 Year Warranty</label>
                            <input id="1shipping" type="checkbox" name="1shipping" value="1shippingValue">
                            <label for="1shippingValue">1 Day Shipping</label>
                            <br>
                            <input id="2shipping" type="checkbox" name="2shipping" value="2shippingValue" checked>
                            <label for="2shippingValue">2 Day Shipping</label>
                            <input id="3shipping" type="checkbox" name="3shipping" value="3shippingValue">
                            <label for="3shippingValue">3 Day Shipping</label>
                        </fieldset>

                        <!-- <div class="submitButton"> -->
                        <!-- <input type="button" value="Submit" onclick="validateForm()"> -->
                        <input id="checkoutSubmit" class="btn btn-default" type="submit" value="Check out">
                        <!-- </div> -->
                    </form>
                </div>
            </div>
            <div class="col-md-6">
            <hr>
            <h4>Your  <span class="glyphicon glyphicon-shopping-cart">:</span></h4>
                <div class="row">
                    <div id="checkoutContent">
                    <?php include 'showCartInfo.php';?>
                        
                </div>
                <hr>


            </div>

                  <!-- <form name="CheckoutForm" action="formSubmission.php" method="post" onsubmit="return validateForm()" >
                    <fieldset id="contact">
                        <legend>Billing Information</legend>
                        <label for="firstName">First name:</label>
                        <input type="text" id="firstName" name="firstName" value=""><span id="firstNameReq"></span>
                        <br>
                        <label for="lastName">Last name:</label>
                        <input type="text" id="lastName" name="lastName" value=""><span id="lastNameReq"></span>
                        <br>
                        <label for="faddress"> Address:</label>
                        <input type="text" id="faddress" name="address" value=""><span id="addressReq"></span>
                        <br>

                        <label for="faddress"> State:</label>
                        <input type="text" id="fState" name="state" value=""><span id="stateReq"></span>
                        <br>

                        <label for="faddress"> City:</label>
                        <input type="text" id="fCity" name="city" value=""><span id="cityReq"></span>
                        <br>

                        <label for="faddress"> Zip:</label>
                        <input type="text" id="fzip" name="zip" value=""><span id="zipReq"></span>
                        <br>


                        <label for="fCardNumber"> Credit Card Number:</label>
                        <input type="text" id="fCardNumber" name="cardNumber" value=""><span id="cardReq"></span>
                        <br>

                        <label for="fSecCode"> 3 digit security code:</label>
                        <input type="text" id="fsecCode" name="secCode" value=""><span id="secCodeReq"></span>
                        <br>

                    </fieldset>
                    <fieldset>
                        <legend>Your Cart</legend>

                        <br>
                        <p>Choose your additional selections:
                            <p>
                                <input id="warranty" type="checkbox" name="warranty" value="warrantyValue" checked>
                                <label for="warrantyValue">Include 2 Year Warranty</label>
                                <input id="1shipping" type="checkbox" name="1shipping" value="1shippingValue">
                                <label for="1shippingValue">1 Day Shipping</label>
                                <br>
                                <input id="2shipping" type="checkbox" name="2shipping" value="2shippingValue" checked>
                                <label for="2shippingValue">2 Day Shipping</label>
                                <input id="3shipping" type="checkbox" name="3shipping" value="3shippingValue">
                                <label for="3shippingValue">3 Day Shipping</label>
                            </fieldset>

                            <!-- <div class="submitButton"> -->
                            <!-- <input type="button" value="Submit" onclick="validateForm()"> -->
                            <!-- <input id="checkoutSubmit" type="submit" value="Check out"> -->
                            <!-- </div> -->

                            <!-- </form>  -->

                            <p> </p>
                            <p></p>
                        </div>
                    </div>

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

        <p id="testArea2"></p>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>



    </body>

    </html>
