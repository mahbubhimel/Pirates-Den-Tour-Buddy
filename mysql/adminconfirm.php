<?php
$username = $_POST['name'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

$rowcount = mysqli_num_rows($result);
if($rowcount == 1){
  session_start();
  $_SESSION['adminlogin'] = true;
  header("Location:adminworkpage.php");
}else{
  echo "Wrong";
}


 ?>
