<?php
$id = $_GET['group_id'];
$conn = new mysqli('localhost','root','','travel');
 $sql = "SELECT * FROM host WHERE group_id = $id";
 $result = $conn->query($sql);

 $transport_info = mysqli_fetch_assoc($result);
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
          <h1>Edit Information </h1>
          <hr>



<form action="host_update.php?group_id=<?php echo $id ?>" method="POST">
  <div class="form-group">
    <label for="tour_Title">Tour Title</label>
    <input type="text" class="form-control" name="tour_title" required="required" placeholder="Enter Description" value="<?php echo $transport_info['tour_title']; ?>">
  </div>
  <div class="form-group">
    <label for="budget">Budget</label>
    <input type="text" class="form-control" name="host_budget" required="required" placeholder="Enter Budget" value="<?php echo $transport_info['host_budget']; ?>">
  </div>
  <div class="form-group">
    <label for="td">Tour Description</label>
    <input type="text" class="form-control" name="comment"size="200" maxlength="500" value="<?php echo $transport_info['tour_details']; ?>" >
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" name="tour_date" required="required" placeholder="Enter Description" value="<?php echo $transport_info['tour_date']; ?>">
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
