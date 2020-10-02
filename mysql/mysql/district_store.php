<?php
session_start();
 $id = $_POST['district_id'];
 $name = $_POST['district'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO district VALUES('$id','$name');";
 if(mysqli_query($conn,$sql))
 {
   header("Location: adminworkpage.php");
 }
 else{
   header("Location: store.php");
 }

 ?>
