<?php
$hostname="localhost";
$username="root";
$password="";
$db="example";

$con=new mysqli ($hostname, $username, $password, $db);

$cd=$_POST["category_name"];
$qry="select max(Category_ID) as maxid from food_category";
$jid=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
      {
                  $jid=$rows[0];
      }
$qry="Insert into food_category values ($jid+1,'$cd')";
if (mysqli_query($con,$qry)==TRUE)
{
     header("Location:admin.php");
      
}
else
{
      echo '<script> alert("Please try again");</script>';
}     
?>



