

<!DOCTYPE html>
<html>
    <head>
        <title>Sign up | Lifestyle store</title>
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
             
            </ul>
        </div>
    </div>
</div>
<!--header end-->
<div class="container-fluid decor_bg" id="content">
<div class="row">
    <div class="container">
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            <h2>SIGN UP</h2>
            <form  action="signup_script.php" method="POST">
                <div class="form-group">
                    <input class="form-control" placeholder="Name" name="name"  required  = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required="true"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><?php echo $_GET['m1']; ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="true"  pattern=".{6,}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required="true"><?php echo $_GET['m2']; ?>
                </div>
                <div class="form-group">
                    <input  type="text" class="form-control"  placeholder="City" name="city" required="true">
                </div>
                <div class="form-group">
                    <input  type="text" class="form-control"  placeholder="Address" name="address" required="trues">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
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