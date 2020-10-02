<?php
$id = $_GET['hotel_id'];
$conn = mysqli_connect('localhost','root','','travel');
$sql = "DELETE FROM hotel WHERE hotel_id = $id";
if(mysqli_query($conn,$sql))
{
  header("Location: hotel_index.php");
}
else{
  echo "No deleted";
}
 ?>
