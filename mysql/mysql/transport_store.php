<?php
 $tr_id = $_POST['transport_id'];
 $type = $_POST['type'];
 $name = $_POST['tr_name'];
 $fair = $_POST['tr_fair'];
 $district_id = $_POST['district_id'];

 $conn = mysqli_connect('localhost','root','','travel');
 $sql = "INSERT INTO transport VALUES('$tr_id','$type','$name','$fair','$district_id');";
 if(mysqli_query($conn,$sql))
 {
   header("Location: adminworkpage.php");
 }
 else{
   echo "Not Inserted";
 }

 ?>
