<?php

$id = $_GET['group_id'];
$c_id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
$sql = "SELECT * FROM host WHERE group_id = $id";
$result = $conn->query($sql);

 $client_info = mysqli_fetch_assoc($result);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Events</title>
    <style media="screen">
      .color{
         background-color: #4CAF50;
      }
    </style>
  </head>
  <body><br><br><br>
    <div class="w3-top">
<div class="w3-bar w3-black w3-card">
<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<a href="homepage.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large">HOME</a>
<a href="client_profile_show.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Profile</a>
<a href="only_budget.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Estimated Budget Routes </a>
<a href="budget_travel.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Budget Travel</a>
<a href="event_index.php?client_id= <?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Events</a>
<a href="host.php?client_id=<?php echo $id=$_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Host</a>
<a href="food.php?client_id=<?php echo $id= $_GET['client_id']; ?>" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Foods</a>
<div class="w3-dropdown-hover w3-hide-small">
  <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
  <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href="#" class="w3-bar-item w3-button">Foods</a>
    <a href="#" class="w3-bar-item w3-button">Extras</a>
    <a href="#" class="w3-bar-item w3-button">Media</a>
  </div>
</div>
<a href="clientlogout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log out</a>
<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
</div>
</div>
    <div class="container">
      <div class="row">
        <div class="col-md-2">

        </div>

        <div class="col-md-9">
          <h1>Event Information</h1>
          <hr>
          <table class="table">
            <tr>
              <th width="100" class="text-right"> Post ID:</th>
              <td><?php echo $client_info['group_id']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Tour Title:</th>
              <td><?php echo $client_info['tour_title']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Event Cost:</th>
              <td><?php echo $client_info['host_budget']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Tour Details:</th>
              <td><?php echo $client_info['tour_details']; ?></td>
            </tr>
            <tr>
              <th width="100" class="text-right">Tour Date:</th>
              <td><?php echo $client_info['tour_date']; ?></td>
            </tr>
            <!-- <td>
              <a class="btn btn-info" href="event_show_client.php?group_id= <?php echo $row['group_id'];?>">Interested</a>
            </td>
            <td>
              <a class="btn btn-info" href="event_show_client.php?group_id= <?php echo $row['group_id'];?>">Going</a>
            </td> -->
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
