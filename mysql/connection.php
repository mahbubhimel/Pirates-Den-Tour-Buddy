<?php
$conn = mysqli_connect('localhost','root','','travel');

if($conn){
  $sql = "INSERT INTO district VALUES(123,'fgdfg');";
  if(mysqli_query($conn,$sql)){
    echo "inserted";
  }
}
 ?>
