<?php
$con=mysqli_connect("localhost","root","","example");
$id=$_POST["ItemID"];
$in=$_POST["ItemName"];
$ip=$_POST["price"];
$qry="update  food_item_table set Item_Name='$in', Price=$ip where Item_ID=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record updated');</script>";
      echo '<script>window.open("admin.php");</script>';
}
?>