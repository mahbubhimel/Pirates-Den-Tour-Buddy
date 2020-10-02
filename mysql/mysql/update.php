<?php
$id = $_GET['client_id'];
 $name = $_POST['name'];
 $mail = $_POST['email'];
 $password = $_POST['password'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "UPDATE client SET client_name = '$name',client_mail = '$mail',client_password='$password',client_address='$address',phone_number='$phone' WHERE client_id = $id ";
 if(mysqli_query($conn,$sql))
 {
   header("Location: show.php?client_id=" .$id);
 }
 else{
   echo 'Not inserted';
 }

 ?>
