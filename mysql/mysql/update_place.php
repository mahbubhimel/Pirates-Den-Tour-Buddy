<?php
$id = $_POST['place_id'];
$name = $_POST['place_name'];
$fair = $_POST['place_fair'];
$district_id = $_POST['district_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "UPDATE place SET place_id= '$id', place_name = '$name',place_fair= '$fair', district_id='$district_id' WHERE place_id = $id ";
 if(mysqli_query($conn,$sql))
 {
   header("Location: place_index.php?place_id=" .$id);
 }
 else{
   echo 'Not inserted';
 }

 ?>
