<?php
 $id = $_GET['client_id'];
 $tour_title = $_POST['tour_title'];
 $host_budget = $_POST['host_budget'];
 $date = $_POST['tour_date'];
 $tour_member = $_POST['required_member'];
 $description = $_POST['comment'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO host VALUES(null,$id,'$tour_title',$host_budget,'$description','$date',$tour_member);";
 if(mysqli_query($conn,$sql))
 {

   header("Location: homepage.php?client_id=$id");

 }
 else{
   header("Location: store.php");
 }

 ?>
