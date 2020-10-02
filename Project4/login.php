
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login | Lifestyle store
        </title>

       
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

    <body>
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
               
            </ul>
        </div>
    </div>
</div>

        <div id="content">
            <div class="container-fluid decor_bg"  id="login-panel">
                <div class="row "></div>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                 <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                    <form role="form" action="login_submit.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    </form><br/>
                           
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                 

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <footer>
    <div class="container" >
        <center>
            <p>Copyright &copy; Flower Hut. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </center>
    </div>
</footer>
                    
                
            
        </body>
        </html>