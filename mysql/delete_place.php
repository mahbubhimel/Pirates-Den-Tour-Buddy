<?php
$id = $_GET['place_id'];
$conn = mysqli_connect('localhost','root','','travel');
$sql = "DELETE FROM place WHERE place_id = $id";
if(mysqli_query($conn,$sql))
{
  header("Location: place_index.php");
}
else{
  echo "No deleted";
}
 ?>
