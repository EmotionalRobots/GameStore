index.php

    <!DOCTYPE html>
    <html lang="en">

    <head>
    <?php session_start(); 
    // $_SESSION["id"] = "1";?>
    
    <?php include("connect.php");?>
    <style>
    #logo {
        max-width: 50%;
        max-height: 50%;
    }
    </style>
            

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>GameStore homepage</title>
            <!-- <a href="javascript:myFunc();">MyFunc</a>
            <p id="myFuncTester"></p> -->

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/shop-homepage.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body onload="showAllProducts()">

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
                        <p class="lead">GameStore</p>
                        <div class="list-group">
                            <img id = "logo" src="pictures/logo.jpg" alt="">
                            <a href="#" class="list-group-item" onclick="showAllProducts()">All</a>
                            <a href="#" class="list-group-item" onclick="showXboxProducts()">Xbox</a>
                            <a href="#" class="list-group-item" onclick="showPlaystationProducts()">Playstation</a>
                            <a href="#" class="list-group-item" onclick="showNintendo3DSProducts()">Nintendo 3DS</a>
                            <a href="#" class="list-group-item" onclick="showPCProducts()">PC</a>

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

                        <div id="dynamicCategories" class="row">
                            <!-- <h2>PRODUCT NAME</h2>
                            <hr>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/58Pspqx0XGs" frameborder="3" allowfullscreen></iframe>
                            <br>
                            <img class="pull-right" src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcjH7Y0zrFAw6OK32H4ByBTK3XKBmgscHXo2gFp5bhlVOcqzN2FTlIeD._X9pRr_hromNn9pZ1R93GAfJeL40iJI_.TTiKQLK4_IfroPCt1UbhgCB1RM_dctJvSiUstO50S02In248863_5Af2u4uRu5m4FwXjv4iL0T8c0uHXJrU-&format=png&h=294&w=215" alt="">



                            
                            <h4><p>NAME</p>
                                <h4></br>PRICE</h4>
                            </h4>
                            <p>DESCRIPTION</p>

                            <form class="form-inline" name="addToCartForm" action="addToCart.php" method="post">
                                <label for="itemQuantity">Quantity:</label>
                                <input type="hidden" name="productID" value="*PRODUCTID*">
                                <input type="hidden" name="productID" value="*CUSTOMERID*">
                                <select name="itemQuantity" class="form-control">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                              </select>
                              <button type="submit" class="btn btn-default btn-sm">
                                  <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
                              </form>  -->

                          </div>

                        <!-- <div class="col-sm-3 col-lg-3 col-md-3">
                                 <div class="thumbnail">
                                    <img src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcjH7Y0zrFAw6OK32H4ByBTK3XKBmgscHXo2gFp5bhlVOcqzN2FTlIeD._X9pRr_hromNn9pZ1R93GAfJeL40iJI_.TTiKQLK4_IfroPCt1UbhgCB1RM_dctJvSiUstO50S02In248863_5Af2u4uRu5m4FwXjv4iL0T8c0uHXJrU-&format=png&h=294&w=215" alt="">
                                    <div class="caption">
                                        <h4 class="pull-right"></br>25.99</h4>
                                        <h4 ><a id = "1" href="javascript:showGameInfo(1);">Black Ops 3</a>
                                        </h4>
                                        <p>This will be a description of the listed game above. We will add a 'description' column to our mySQL database products table. </p>
                                    </div>
                                </div>
                            </div> -->
                             <div id=gameInfo>
                                <!-- <h2>PRODUCT NAME</h2>
                                <hr>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/58Pspqx0XGs" frameborder="3" allowfullscreen></iframe>
                                <br>
                                <img class="pull-right" src="https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcjH7Y0zrFAw6OK32H4ByBTK3XKBmgscHXo2gFp5bhlVOcqzN2FTlIeD._X9pRr_hromNn9pZ1R93GAfJeL40iJI_.TTiKQLK4_IfroPCt1UbhgCB1RM_dctJvSiUstO50S02In248863_5Af2u4uRu5m4FwXjv4iL0T8c0uHXJrU-&format=png&h=294&w=215" alt="">




                                 <h4><p>NAME</p>
                                    <h4></br>PRICE</h4>
                                 </h4>
                                 <p>DESCRIPTION</p>

                                 <form class="form-inline" name="addToCartForm" action="addToCart.php" method="post">
                                    <label for="itemQuantity">Quantity:</label>
                                    <input type="hidden" name="productID" value="*PRODUCTID*">
                                    <input type="hidden" name="productID" value="*CUSTOMERID*">
                                    <select name="itemQuantity" class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                                  <button type="submit" class="btn btn-default btn-sm">
                                      <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
                                  </form>  -->

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

                <p id = "testArea"></p>
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

                <script src="js/myScripts.js"></script>


            </body>

            </html>
