<?php
  $id = $_POST['hotel_id'];
  $name = $_POST['hotel_name'];
  $category = $_POST['hotel_category'];
  $fair = $_POST['hotel_fair'];
  $district_id = $_POST['district_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO hotel VALUES('$id','$name','$category',$fair,'$district_id');";
 if(mysqli_query($conn,$sql))
 {
   header("Location: adminworkpage.php");
 }
 else{

   header("Location: store.php");
 }

 ?>
