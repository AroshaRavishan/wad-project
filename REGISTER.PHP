<?php
$con=mysqli_connect("localhost","root","","example");
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$pwd=$_POST["password"];
$eml=$_POST["email"];
$qry="INSERT INTO customer_details values('','$fn','$ln','$pwd','$eml')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Successful");</script>';
      header('refresh:0;url=home.html');
}
else
{
    echo '<script> alert("Please try again");</script>';
}
     
?>