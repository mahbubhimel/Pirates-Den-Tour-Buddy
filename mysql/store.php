<?php
 $name = $_POST['name'];
 $mail = $_POST['email'];
 $password = $_POST['password'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO client VALUES(null,'$name','$mail','$password','$address',$phone);";
 if(mysqli_query($conn,$sql))
 {
   header("Location: login.php");
 }
 else{
   header("Location: store.php");
 }

 ?>
