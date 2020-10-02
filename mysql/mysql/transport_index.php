<?php
session_start();

$conn = new mysqli('localhost','root','','travel');
 $sql = "SELECT * FROM transport";
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

          <h1>Transport List</h1>
          <hr>
          <table class="table">
            <thead>
              <th>Transport ID</th>
              <th>Type</th>
              <th>Transport Name</th>
              <th>Transport Fair</th>
              <th>District ID</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php while ($row = $result->fetch_assoc()) {  ?>
              <tr>
                <td><?php echo $row['transport_id'] ?></td>
                <td><?php echo $row['type'] ?></td>
                <td><?php echo $row['tr_name'] ?></td>
                <td><?php echo $row['tr_fair'] ?></td>
                <td><?php echo $row['district_id'] ?></td>
                <td>
                  <a class="btn btn-warning" href="edit_transport.php?transport_id= <?php echo $row['transport_id'];?>">Edit</a>
                  <a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="delete_transport.php?transport_id=<?php echo $row['transport_id'];?>">Delete</a>
                </td>
              </tr>
            <?php } ?>
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
