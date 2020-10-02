<?php
$id = $_POST['hotel_id'];
$name = $_POST['hotel_name'];
$category = $_POST['hotel_category'];
$fair = $_POST['hotel_fair'];
$district_id = $_POST['district_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "UPDATE hotel SET hotel_id='$id', hotel_name = '$name',hotel_catagory = '$category',hotel_fair='$fair',district_id='$district_id' WHERE hotel_id = $id ";
 if(mysqli_query($conn,$sql))
 {
   header("Location: hotel_index.php?hotel_id=" .$id);
 }
 else{
   echo 'Not inserted';
 }

 ?>
