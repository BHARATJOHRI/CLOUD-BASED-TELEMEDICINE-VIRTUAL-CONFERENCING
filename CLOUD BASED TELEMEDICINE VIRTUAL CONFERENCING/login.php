<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold text-white" href="index.html"><marquee scrollamount="5" behavior="scroll" ><b>TeleMedicine Sevices</b></marquee></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-uppercase">
                <li class="nav-item active">
                  <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" href="#">About</a> -->
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li> -->
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Help</a> -->
                </li>
            </div>
            </div>
          </nav> 

        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Log In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fa fa-facebook-square"></i></span>
                            <span><i class="fa fa-google-plus-square"></i></span>
                            <span><i class="fa fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="./faltu.php" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" required>
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="password" name="password" required>
                            </div>
                            <div class="row align-items-center remember">
                                <!-- <input type="checkbox">Remember Me -->
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="submit" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="signup.php">Sign Up</a>
                        </div>
                        <!-- <div class="d-flex justify-content-center">
                            <a href="#">Forgot your password?</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        </div>  
      </body>
      </html>
<?php
require "db/dp.php";
if(isset($_POST['submit'])){
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

$q = "SELECT * FROM `login` WHERE mobile='$mobile' && password='$password'";
$query = mysqli_query($conn,$q);
if($query){
if(mysqli_num_rows($query)>0){
    echo "hi i m here";
    header('location:doctor.php');
}
else{
    echo "<script>alert('Email or password incorrect ,Please try again')</script>";
}
}
}

?>
