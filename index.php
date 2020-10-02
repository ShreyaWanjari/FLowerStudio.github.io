
<!DOCTYPE html>
<html>
    <head>
        <title>
            Welcome | The Flower Store
        </title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1" >

        <!--bootstrap css-->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!--jquery-->
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>

        <!--bootstrap javascript-->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!--custom css-->
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

     <body style="padding-top: 50px;">
     
      <!-- Header -->
      <div class="navbar navbar navbar-fixed-top" style="background-color: #243937;">
    <div class="container">
        <div class="navbar-header"> <button type="button" class="navbar-toggle" data-toggle="collapse"
                datatarget="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> </button> <a class="navbar-brand" href="index.php">Flower Studio
                    </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a
                        href="cart.php" style="background-color:#243937;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href="settings.php" style="background-color:#243937;"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href="logout_script.php" style="background-color:#243937;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> ?>
             <li><a href="signup.php" style="background-color:#243937;"><span
                            class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
                <li><a href="login.php" style="background-color:#243937;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php                     }                     ?>
            </ul>
        </div>
    </div>
</div>
        <!--Header end-->
       

        <div id="content">
            <!--main banner image-->
        <div id="banner_image">
            <div class="container">
                <center>
              <div id="banner_content">
                  <h1>Smell the blossom.</h1>
                  <p>Flat 20% OFF on first order.</p><a href="products.php" class="btn btn-warning btn-lg active">Shop Now</a>
              </div>
              </center>
            </div>
            
        </div>
        <!--main banner image end-->
        
        <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#gerbera">
                    <div class="thumbnail">
                        <img src="4.jpg" alt="responsive image">
                        <div class="caption">
                            <h3>Gerbera's</h3>
                            <p>Choose among the wide range of colors.</p>
                        </div>
                    </div>
                    </a>
                </div>
        
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#tulip">
                    <div class="thumbnail">
                        <img src="2.jpg" style="height:250px; alt="responsive image">
                        <div class="caption">
                            <h3>Tulips</h3>
                            <p>Best flowers to gift on any ocassion.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#rose">
                    <div class="thumbnail">
                        <img src="5.jpg" style="height:270px;" alt="responsive image">
                        <div class="caption">
                            <h3>Roses</h3>
                            <p>Our huge collection of roses.</p>
                        </div>
                    </div>
                    </a>
                </div>

                
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#peony">
                    <div class="thumbnail">
                        <img src="7.jpg" style="height:290px;"alt="responsive image">
                        <div class="caption">
                            <h4>Peony </h4>
                            <p>Huge variety of colors.</p>
                        </div>
                    </div>
                    </a>
                </div>
                </div>


                <div class="row text-center" id="item_list">
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#ranunculus">
                    <div class="thumbnail">
                        <img src="6.jpg"style="height:250px;" alt="responsive image">
                        <div class="caption">
                            <h4>Ranunculus</h4>
                            <p>Choose among wide variety of colors.</p>
                        </div>
                    </div>
                    </a>
                </div>

                     
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#chrysanthemum">
                    <div class="thumbnail">
                        <img src="1.jpg" alt="responsive image">
                        <div class="caption">
                            <h4>Chrysanthemum </h4>
                            <p>Choose among wide variety of colors.</p>
                        </div>
                    </div>
                    </a>
                </div>

                      
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#stock">
                    <div class="thumbnail">
                        <img src="3.jpg" alt="responsive image">
                        <div class="caption">
                            <h4>Stock </h4>
                            <p>Most beautiful and fragnant flowers.</p>
                        </div>
                    </div>
                    </a>
                </div>

                      
                <div class="col-sm-3 col-sm-6">
                    <a href="products.php#gladioli">
                    <div class="thumbnail">
                        <img src="8.jpg" style="height:270px;"alt="responsive image">
                        <div class="caption">
                            <h4>Gladioli </h4>
                            <p>Best one to gift on any ocassion.</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>    
        </div>    
           



        
        </div>
      
            <!--Footer-->
            <footer>
    <div class="container" >
        <center>
            <p>Copyright &copy; Flower Hut. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </center>
    </div>
</footer>
        <!--Footer end-->
       

    </body>

</html>