<?php

 $button_input="Going";
 $group_id = $_GET['group_id'];
 $conn = new mysqli('localhost','root','','travel');
 $sql = "SELECT * FROM host WHERE group_id = $group_id";
 $result = $conn->query($sql);
 $client_info = mysqli_fetch_assoc($result);
 $host_id =  $client_info['host_id'];
 $client_id = $_GET['client_id'];
 $transaction_number=$_POST['transaction_num'];

  $sql = "INSERT INTO enroll VALUES(null,'$group_id','$client_id','$button_input',$transaction_number);";



  if(mysqli_query($conn,$sql))
  {
    header("Location: homepage.php?client_id=".$client_id);
  }
  else{
     header("Location: store.php");
  }

  ?>
