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
    header('location:doctinfo.php');
}
else{
    echo "<script>alert('Email or password incorrect ,Please try again')</script>";
}
}
}

?>