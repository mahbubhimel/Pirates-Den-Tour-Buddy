<?php
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
  </head>
  <br><br>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>

        <div class="col-md-5">
          <h1>Transport Information</h1>
          <hr>



<form action="transport_store.php" method="POST">
  <div class="form-group">
    <label for="transport_id">Transport ID</label>
    <input type="text" class="form-control" name="transport_id" required="required" aria-describedby="emailHelp" placeholder="Enter Transport ID">
  </div>
  <div class="form-group">
    <label for="type">Type Of Transport</label>
    <select class="form-control" id="type" name = "type">
      <option>Bus Non-Ac</option>
      <option>Bus Ac</option>
      <option>Sleeper Coach</option>
      <option>Air</option>
      </select>
  </div>
  <div class="form-group">
    <label for="tr_name">Transport Name</label>
    <input type="text" class="form-control" name="tr_name" required="required" placeholder="Enter Transport Name">
  </div>
  <div class="form-group">
    <label for="tr_fair">Transport Fair</label>
    <input type="text" class="form-control" name="tr_fair" required="required" aria-describedby="emailHelp" placeholder="Enter Transport Fair">
  </div>

  <div class="form-group">
    <label for="district_id">District ID</label>
    <input type="text" class="form-control" name="district_id" required="required" aria-describedby="emailHelp" placeholder="Enter District ID">
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
