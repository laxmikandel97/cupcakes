<!--Laxmi Kandel
Full stack IT328
January 10 2020
Ask user to input there name and select the cake flavors they want to order when the user input data are valid
display a thank you note and total order-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="cupcake.css">
    <title>Cupcake!</title>
</head>
<body>
<form id="CupcakeForm" action="#" method="post" onsubmit="return false">
    <div class="container">
        <h1>Cupcakes Fundraiser</h1>
        <img class="img-thumbnail rounded float-right" width="200" height="300" src="cupcake.jpg" alt="cupcake image">
        Your name:<br>
        <div class="row">
            <input class="col-6" type="text" id="name" name="name" value="<?php if (isset($_POST['name'])) {
                echo $_POST['name'];
            } ?>" placeholder="Please input your name!"><br>
            <span class="err" id="err-name">
                        Please enter your  name</span>
        </div>
        <h2> Cupcakes flavors</h2>
        <div class="form-group">
            <?php
            //get the access to the assco array
            include "functions.php";
            //display the options form the assco array
            foreach ($flavors as $key => $value) {
                echo " <input class='form-check-inline' type='checkbox' name='flavor[]' value='$key'=>$value  </input>" . "<br>";
            }
            ?>
            <div>
                <span class="err" id="err-flavor">Please select at least one interest</span>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success mb-3">Order</button>
    </div>
    <div class="container">
        <!--        When the user click order button valid the data and display thank you message and total due-->
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $getFlavors = $_POST["flavor"];
            $count = 0;
            echo " Thank you, " . $name . ", Below is your order";
            echo " Order Summary:" . "<br>";
            echo "<ul>";
            $isvalid = true;
            foreach ($getFlavors as $item) {
                if (array_key_exists("$item", $flavors)) {
                    echo "<li>" . $flavors["$item"] . "</li>";
                    $count++;
                } else {
                    echo "<p class='text-danger'> Your Order is not been place. Please check your options!</p>";
                    $isvalid = false;
                    break;
                }
            }
            if (($isvalid)) {
                $total=$count*3.50;
                echo "<h5 class='text-info'> Total Order:  $" . number_format($total,2) . "</h5>";
                echo "</ul>";
            }
        }
        ?>
    </div>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="cupcake.js"></script>
</body>
</html>
