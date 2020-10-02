<?php
$id = $_GET['client_id'];
$conn = mysqli_connect('localhost','root','','travel');
$sql = "DELETE FROM client WHERE client_id = $id";
if(mysqli_query($conn,$sql))
{
  header("Location: index.php");
}
else{
  echo "No deleted";
}
 ?>
