<?php
 $id = $_GET['group_id'];
 $tour_title = $_POST['tour_title'];
 $h_budget = $_POST['host_budget'];
 $comment = $_POST['comment'];
 $tour_date = $_POST['tour_date'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "UPDATE host SET tour_title='$tour_title', host_budget = $h_budget ,tour_details = '$comment',tour_date='$tour_date' WHERE group_id = $id ";
 if(mysqli_query($conn,$sql))
 {
   header("Location: event_show_client.php?group_id=" .$id);
 }
 else{
   echo 'Not inserted';
 }

 ?>
