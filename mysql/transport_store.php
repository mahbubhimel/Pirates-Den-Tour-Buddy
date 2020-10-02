<?php
 $tr_id = $_POST['transport_id'];
 $type = $_POST['type'];
 $name = $_POST['tr_name'];
 $fair = $_POST['tr_fair'];
 $pickup_id = $_POST['pickup_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO transport VALUES('$tr_id','$type','$name','$fair',$pickup_id);";
 if(mysqli_query($conn,$sql))
 {
   header("Location: adminworkpage.php");
 }
 else{
   echo "Not Inserted";
 }

 ?>
