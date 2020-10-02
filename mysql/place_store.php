<?php
 $id = $_POST['place_id'];
 $name = $_POST['place_name'];
 $place_fair = $_POST['place_fair'];
 $district_id = $_POST['district_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO place VALUES('$id','$name','$place_fair','$district_id');";
 if(mysqli_query($conn,$sql))
 {
   header("Location: adminworkpage.php");
 }
 else{
   header("Location: store.php");
 }

 ?>
