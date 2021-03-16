<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8"/><link rel="icon" href="/favicon.png"/><meta name="viewport" content="width=device-width,initial-scale=1"/><meta name="theme-color" content="#000000"/><meta name="description" content="Ready-to-use Tailwind CSS blocks"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
<link rel="manifest" href="/manifest.json"/><link href="/static/css/main.616f9ddc.chunk.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./doctor/doctor.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white" href="./index.html"><marquee scrollamount="5" behavior="scroll" ><b>TeleMedicine Sevices</b></marquee></a>
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
            <li class="nav-item">
                <!-- <a class="nav-link" href="doctor/doctor.html">Doctor</a> -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="doctor/doctor.html">Help</a>
            </li>
        </div>
        </div>
      </nav> 
  </div>
<div class="appointment_sec">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-lg-5">
              <div class="appoint_ment_form">
                  <h4>Book an Appointment</h4>
                  <p>It established fact that and reader will be distracted that it has a normal content.</p>
                  <form method="POST" action="./link.php">
                      <input type="date" name="date" required>
                      <input type="time" name="time" required>
                      <input type="submit" name="submit" class="btn" value="Get Your Appointment">
                  </form>
              </div>
              <!--/.appoint_ment_form-->
          </div>
      </div>
  </div>
</div>
</body>
</html>
<?php
require "db/dp.php";
if(isset($_POST['submit'])){
$date = $_POST['date'];
$time = $_POST['time'];
if($date != NULL && $time != NULL){
$queryresult = mysqli_query($conn,"insert into appointment(Date,Time)values('$date','$time')");
var_dump($queryresult);    
}
}
?>


