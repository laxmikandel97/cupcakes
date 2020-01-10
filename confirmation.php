<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Thank you!</title>

</head>
<body>
<div class="container">
    <img class="img-thumbnail rounded float-right" width="200" height="300" src="cupcake.jpg" alt="cupcake image">
    <?php
    $name = $_POST["name"];
    $getFlavors = $_POST["flavor"];
    echo " Thank you, " . $name . ", for your order";
    echo " Order Summary:"."<br>";
    echo "<ul>";
    $count =0;
    foreach ($getFlavors as $item)
    {
        echo "<li>".$item ."</li>";
        $count++;
    }
    echo "<h5 class='text-info'> Total Order:  $".$count*3.50."</h5>";
    echo "</ul>";

    ?>
</div>
</body>
</html>