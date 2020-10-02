<?php

 $button_input="Interested";
 $group_id = $_GET['group_id'];
 $conn = new mysqli('localhost','root','','travel');
 $sql = "SELECT * FROM host WHERE group_id = $group_id";
 $result = $conn->query($sql);
 $client_info = mysqli_fetch_assoc($result);
 $host_id =  $client_info['host_id'];
 $client_id = $_GET['client_id'];

  $conn = mysqli_connect('localhost','root','','travel');
  $sql = "INSERT INTO enroll VALUES(null,'$group_id','$client_id','$button_input',0);";
  if(mysqli_query($conn,$sql))
  {
    header("Location: event_index.php?client_id=".$client_id);
  }
  else{
    header("Location: store.php");
  }

  ?>
