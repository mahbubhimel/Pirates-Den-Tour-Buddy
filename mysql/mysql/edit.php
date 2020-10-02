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

    <title>Edit Client Information</title>
  </head>
  <br><br>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info" href="index1.php">New Student</a>
        </div>

        <div class="col-md-9">
          <h1>Edit Client Information </h1>
          <hr>



<form action="update.php?client_id=<?php echo $id ?>" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" required="required" aria-describedby="emailHelp" placeholder="User Name" value="<?php echo $client_info['client_name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" required="required" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $client_info['client_mail']; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required="required" placeholder="Password" value="<?php echo $client_info['client_password']; ?>">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" required="required" aria-describedby="emailHelp" placeholder="Address" value="<?php echo $client_info['client_address']; ?>">
  </div>

  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" class="form-control" name="phone" required="required" aria-describedby="emailHelp" placeholder="Phone Number" value="<?php echo $client_info['phone_number']; ?>">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


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
