<?php
$id = $_GET['transport_id'];
$conn = mysqli_connect('localhost','root','','travel');
$sql = "DELETE FROM transport WHERE transport_id = $id";
if(mysqli_query($conn,$sql))
{
  header("Location: transport_index.php");
}
else{
  echo "No deleted";
}
 ?>
