<?php
$con=mysqli_connect("localhost","root","","example");
$id=$_GET["key"];
$qry="delete from food_item_table where Item_ID=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record Deleted');</script>";
      echo '<script>window.open("admin.php");</script>';
}
?>