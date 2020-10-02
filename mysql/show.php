<?php

$id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM client WHERE client_id = $id";
$result = $conn->query($sql);

 $client_info = mysqli_fetch_assoc($result);
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
        <div class="col-md-2">
          
        </div>

        <div class="col-md-9">
          <h1>Client Information</h1>
          <hr>
          <table class="table">
            <tr>
              <th width="100" class="text-right">ID:</th>
              <td><?php echo $client_info['client_id']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Name:</th>
              <td><?php echo $client_info['client_name']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Email:</th>
              <td><?php echo $client_info['client_mail']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Password:</th>
              <td><?php echo $client_info['client_password']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Address:</th>
              <td><?php echo $client_info['client_address']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Phone Number:</th>
              <td><?php echo $client_info['phone_number']; ?></td>
            </tr>

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
