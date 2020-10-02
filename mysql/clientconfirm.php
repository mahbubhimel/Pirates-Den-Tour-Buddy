<?php
 $email = $_POST['email'];
 $password = $_POST['password'];

$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM client WHERE client_mail = '$email' AND client_password = '$password'";
$id = "SELECT client_id FROM client WHERE client_mail = '$email' AND client_password = '$password'";
$result = $conn->query($id);

$client_info = mysqli_fetch_assoc($result);
$profile_show_id = $client_info['client_id'];
$result = $conn->query($sql);

$rowcount = mysqli_num_rows($result);
if($rowcount == 1){
   session_start();
   $_SESSION['login'] = true;
   header("Location:homepage.php?client_id=$profile_show_id");

}else{
  echo "Wrong";
}
 ?>
