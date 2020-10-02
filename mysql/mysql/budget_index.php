<?php

 $id = $_GET['client_id'];
 $district_name = $_POST['district_name'];
 $place_name = $_POST['place_name'];
 $transport_type = $_POST['type'];
 $hotel_category = $_POST['hotel_category'];
 $budget = $_POST['budget'];


$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT
d.district_name,p.place_name,t.tr_name,h.hotel_name
FROM district as d JOIN place as p ON d.district_id = p.district_id JOIN hotel as h ON
d.district_id = h.district_id JOIN transport as t on d.district_id = t.district_id
WHERE h.hotel_catagory = $hotel_category AND t.type = $transport_type AND p.place_name = $place_name";
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

          <h1>Client List</h1>
          <hr>
          <table class="table">
            <thead>
              <th>District Name</th>
              <th>Place Name</th>
              <th>Transport</th>
              <th>Hotel</th>

              <th>Action</th>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($result)) {  ?>
              <tr>
                <td><?php echo $row['district_name'] ?></td>
                <td><?php echo $row['place_name'] ?></td>
                <td><?php echo $row['tr_name'] ?></td>
                <td><?php echo $row['hotel_name'] ?></td>

                <td>
                  <a class="btn btn-info" href="show.php?client_id= <?php echo $row['client_id'];?>">Select</a>
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
