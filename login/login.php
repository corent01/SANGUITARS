<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login</title>
    <!-- favicons
      ================================================== -->
    <link rel="apple-touch-icon" sizes="60x60" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#f50000">
    <meta name="apple-mobile-web-app-title" content="&lt;co/wa&gt;">
    <meta name="application-name" content="&lt;co/wa&gt;">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ff0000">
</head>
<body id="memLogin">


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Login For Bata-Test Zone</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="name" type="name" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Possword" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-danger btn-block" type="submit" value="In Zone Beta-Test" name="login" id="inBuEntree" >

								
                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
						<div class="col-md-12" class="bHome">
							<form class="bHome" action="../index.html">
								<input class="btn btn-lg btn-danger" id="inBuHome" type="submit" value="Home" />
							</form>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>

  
 

</footer>
</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_name='$user_name'AND user_pass='$user_pass'";

    $run=mysqli_query($conn,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['name']=$user_name;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Name or password is incorrect!')</script>";
    }
}
?>
