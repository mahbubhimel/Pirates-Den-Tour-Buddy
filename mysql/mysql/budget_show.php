<?php

$id = $_GET['client_id'];
$district_name = $_POST['district_name'];
$place_name = $_POST['place_name'];
$transport_type = $_POST['type'];
$hotel_category = $_POST['hotel_category'];
$budget = $_POST['budget'];


$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT
d.district_name as District , t.tr_name as Transport, h.hotel_name as Hotel , p.place_name as Place,t.tr_fair as Transport_Fair, h.hotel_fair as Hotel_Fair,p.route_fair as Route_Fair,
(p.place_fair+h.hotel_fair + t.tr_fair) as Total_Costing
FROM district as d JOIN place as p ON d.district_id = p.district_id JOIN hotel as h ON
d.district_id = h.district_id JOIN transport as t on d.district_id = t.district_id
where h.hotel_catagory = $hotel_category AND t.type = $transport_type AND p.place_name = $place_name";
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
              <th width="100" class="text-right">District</th>
              <td><?php echo $client_info['d.district_name']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Transport</th>
              <td><?php echo $client_info['t.tr_name']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Hotel</th>
              <td><?php echo $client_info['h.hotel_name']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Place</th>
              <td><?php echo $client_info['p.place_name']; ?></td>

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
