<?php
$id = $_POST['tr_id'];
$type = $_POST['type'];
$name = $_POST['tr_name'];
$fair = $_POST['tr_fair'];
$district_id = $_POST['district_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "UPDATE transport SET transport_id='$id', type = '$type',tr_name = '$name',tr_fair='$fair',district_id='$district_id' WHERE transport_id = $id ";
 if(mysqli_query($conn,$sql))
 {
   header("Location: transport_index.php?transport_id=" .$id);
 }
 else{
   echo 'Not inserted';
 }

 ?>
