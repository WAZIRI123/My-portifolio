<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$Camera_title=$_POST['Camera_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$Camera_copies=$_POST['Camera_copies'];
$Camera_pub=$_POST['Camera_pub'];
$publisher_name=$_POST['publisher_name'];
$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive'];
$date_added=$_POST['date_added']; */
$status=$_POST['status'];




mysqli_query($conn,"update Camera set Camera_title='$Camera_title',category_id='$category_id',author='$author'
,Camera_copies = '$Camera_copies',Camera_pub = '$Camera_pub',publisher_name = '$publisher_name',isbn = '$isbn',copyright_year='$copyright_year',status='$status' where Camera_id='$id'")or die(mysqli_error());
								
								
 header('location:Camera.php');
}
?>	