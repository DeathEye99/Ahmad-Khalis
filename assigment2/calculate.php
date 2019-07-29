<?php
include "include/nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <<meta name="viewport" contecnt="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Bottstrap-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Assigment 2</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<form action="process/function.php" method="post">

  <!-- Page Content -->
  <div class="container">

    <div class="row">

        </div>

        <div class="row">
          
          <!-- Small Pizza -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <label> Pizza Small 9 Inch</label>
                </h4>
                <h5>RM10.00</h5>
                <br>
                <input type="radio" name="pizza" value="small"> Select
                <br>
                <br>
              
                <!-- Sauces -->
                <label>Sauces</label>
                <br>
                <input type="radio" name="sauces" value="royalcheese"> Royal Cheese
                <br>
                <input type="radio" name="sauces" value="spicyasian"> Spicy Asian
                <br>
                <input type="radio" name="sauces" value="bbq"> BBQ

                <br>
                <br>

                <!-- Topping -->
                <label>Toping</label>
                <br>
                <input type="checkbox" name="topping[]" value="prawn">Prawn<br>

                <input type="checkbox" name="topping[]" value="chicken">Chicken<br>

                <input type="checkbox" name="topping[]" value="beef">Beef<br>

                <p class="card-text"></p>
              </div>
            </div>
          </div>
          
          <!-- Medium Pizza -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <label> Pizza Medium 9 Inch</label>
                </h4>
                <h5>RM20.50</h5>
                <br>
                <input type="radio" name="pizza" value="medium"> Select
                <br>
                <br>

                <!-- Sauces -->
                <label>Sauces</label>
                <br>
                <input type="radio" name="sauces" value="royalcheese"> Royal Cheese
                <br>
                <input type="radio" name="sauces" value="spicyasian"> Spicy Asian
                <br>
                <input type="radio" name="sauces" value="bbq"> BBQ
                
                <br>
                <br>

                <!-- Topping -->
                <label>Topping</label>
                <br>
                <input type="checkbox" name="topping[]" value="prawn">Prawn<br>

                <input type="checkbox" name="topping[]" value="chicken">Chicken<br>

                <input type="checkbox" name="topping[]" value="beef">Beef<br>
              
                <p class="card-text"></p>
              </div>
            </div>
          </div>

          <!-- Large Pizza -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <label> Pizza Large 12 Inch</label>
                </h4>
                <h5>RM30.00</h5>
                <br>
                <input type="radio" name="pizza" value="large"> Select
                <br>
                <br>

                <!-- Sauces -->
                <label>Sauces</label>
                <br>
                <input type="radio" name="sauces" value="royalcheese"> Royal Cheese
                <br>
                <input type="radio" name="sauces" value="spicyasian"> Spicy Asian
                <br>
                <input type="radio" name="sauces" value="bbq"> BBQ

                <br>
                <br>

                <!-- Topping -->
                <label>Topping</label>
                <br>
                <input type="checkbox" name="topping[]" value="prawn">Prawn<br>

                <input type="checkbox" name="topping[]" value="chicken">Chicken<br>

                <input type="checkbox" name="topping[]" value="beef">Beef<br>
              
                <p class="card-text"></p>
              </div>
            </div>
          </div>
  </div>

<!--Button-->
<div class="text-center">
<button type="submit" name='option' value="" class="btn btn-primary" >Submit Oder</button>
<button type="reset" name='option' value="" class="btn btn-danger" >Reset</button>
</div>
<br>

</form>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
