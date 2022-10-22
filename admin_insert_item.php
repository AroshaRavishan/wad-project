<?php
$con=mysqli_connect("localhost","root","","example");
$cat=$_POST["Category"];
$ItemName=$_POST['ItemName'];
$Price=$_POST['Price'];

$qry="select max(Item_ID) as maxid from food_item_table ";
$jd=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
      {
                  $jd=$rows[0];
      }
$qry="Insert into food_item_table values ($cat,$jd+1,'$ItemName',$Price)";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Menu Item Added Successful");</script>';
      echo '<script>window.open("admin.php");</script>';
}
else
{
      echo '<script> alert("Please try again");</script>';
      header('refresh:0;url=adminLogin.php');
}
?>