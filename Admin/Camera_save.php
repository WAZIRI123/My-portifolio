<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$Camera_title=$_POST['Camera_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$Camera_copies=$_POST['Camera_copies'];
$Camera_pub=$_POST['Camera_pub'];
$publisher_name=$_POST['publisher_name'];
$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
$status=$_POST['status'];




								
mysqli_query($conn,"insert into Camera (Camera_title,category_id,author,Camera_copies,Camera_pub,publisher_name,isbn,copyright_year,date_added,status)
 values('$Camera_title','$category_id','$author','$Camera_copies','$Camera_pub','$publisher_name','$isbn','$copyright_year',NOW(),'$status')")or die(mysqli_error());
 
 
header('location:Camera.php');
}
?>	