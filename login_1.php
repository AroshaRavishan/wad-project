<?php

$hostname="localhost";
$username="root";
$password="";
$db="example";

$con=new mysqli ($hostname, $username, $password, $db);

$email=$_POST["email"];
$pwd=$_POST["password"];

$qry="select Password from  customer_details where Email='$email'";
$result=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($result))
{
      if ($pwd==$row['Password']) 
      {
                 header("Location:home.html");
                
                
      }
      else
      {
            echo '<script> alert("Incorrect UserName/Password");</script>';
            header('refresh:0;url=home.html');
      }
}     
?>