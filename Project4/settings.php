
<!DOCTYPE html>
<html>
    <head>
        <title>  Settings| Lifestyle store</title>
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
    
    <body>
 <!--header-->
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
                                  ?>
            </ul>
        </div>
    </div>
</div>
<!--header end-->
<div class="container" id="content">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4" >
        <h4>Change Password</h4>
        <form action="settings.html" method="POST">
            <div class="form-group">
                <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required="true">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="New Password" required="true">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required="true">
            </div>
            <button type="submit" class="btn btn-primary">Change</button>
            
            </form>
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