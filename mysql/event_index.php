<?php
session_start();

$id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM host";

// $sql1="SELECT T.going_member as GOING,IF(T.t_member=T.going_member,'Yes','No') as Message,T.post_id as POST_ID
// FROM(SELECT COUNT(*) as going_member , e.group_id as post_id , h.tour_member as t_member
// FROM enroll as e JOIN host as h ON e.group_id = h.group_id
// WHERE e.status = 'Going' AND h.tour_member >=0
// GROUP BY e.group_id) as T";
// $result1 = $conn->query($sql1);
// $host_info2 = mysqli_fetch_assoc($result);
// echo $gg =  $host_info2['Message'];

// while ($row = $result->fetch_assoc()) {
//      echo $row['Message'];
// }


//  $sql2="SELECT COUNT(*) as total,e.group_id as post_id
// FROM enroll as e
// JOIN host as h ON e.group_id = h.group_id
// WHERE e.status = 'Going'
// group by e.group_id";
//
//
//   $result1 = $conn->query($sql2);
//   $host_info1 = mysqli_fetch_assoc($result1);
//   echo $enroll_member =  $host_info1['total'];
//   echo $host_member =  $host_info1['post_id'];
//   $result2 = $conn->query($sql);
//   $host_info2 = mysqli_fetch_assoc($result2);
//   echo $host_member =  $host_info2['tour_member'];

 $result = $conn->query($sql);



 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style media="screen">
      .color{
         background-color: #4CAF50;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-1">
        </div>

        <div class="col-md-10">

          <h1>Event Lists</h1>
          <div class="form-group">
            <label for="name">UserName</label>
            <input type="text" class="form-control" name="name" required="required" aria-describedby="emailHelp" placeholder="User Name">
          </div>

          <hr>
          <table class="table">
            <thead>
              <th>Post Id</th>
              <th>Tour Title</th>

            </thead>
            <tbody>
              <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['group_id'] ?></td>
                <td><?php echo $row['tour_title'] ?></td>
                <?php
                if($row['host_id']==$id){?>
                  <td>
                    <a class="btn btn-info" href="event_show_client.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">Host View</a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="host_edit.php?group_id=<?php echo $row['group_id'];?>">Edit</a>
                  </td>
                  <!-- <td>
                    <a class="btn btn-info" href="event_show_client.php?group_id= <?php echo $row['group_id'];?>">Delete</a>
                  </td> -->

                <?php }?>
                <?php
                if($row['host_id']!=$id){?>
                  <td>
                    <a class="btn btn-info" href="event_show_client.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">Client View</a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="enroll.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id ?> ">Interested</a>
                  </td>

                  <td>
                  <?php
                  $gid=$row['group_id'];
                        $qu="SELECT T.going_member as GOING,IF(T.t_member=T.going_member,'Yes','No') as Message,T.post_id as POST_ID
FROM(SELECT COUNT(*) as going_member , e.group_id as post_id , h.tour_member as t_member
FROM enroll as e JOIN host as h ON e.group_id = h.group_id
WHERE e.status = 'Going' AND h.tour_member >=0
GROUP BY e.group_id) as T
WHERE POST_ID=$gid";

///echo $qu;


try{
$conn1=new PDO("mysql:host=localhost;dbname=travel",'root','');

$stmt=$conn1->query($qu);
$table=$stmt->fetchAll(PDO::FETCH_NUM);

if($table[0][1]=='No'){
  ?>
   <a class="btn btn-info" href="enroll_transaction.php?group_id=<?php echo $row['group_id'];?>&client_id=<?php echo $id?>">Going</a>
<?php
}
else{?>

  <a class="btn btn-warning" href="#">Filled Up</a>
<?php  }?>
<?php
}catch(PDOException $ex){
  echo "<script>window.alert('error in database access')</script>";
}

?>

                <!-- <td>
                  <a class="btn btn-info" href="event_show_client.php?group_id= <?php echo $row['group_id'];?>">View</a>
                </td> -->
              </td>
              </tr>
            <?php } } ?>
            </tbody>
          </table>

        </div>

      </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
