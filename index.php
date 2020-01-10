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
<form id="CupcakeForm" action="confirmation.php" method="post">

    <div class="container">
        <h1>Cupcakes Fundraiser</h1>
        Your name:<br>
        <div class="row">
            <input class="col-6" type="text" id="name" name="name" placeholder="Please input your name!"><br>
            <span class="err" id="err-name">
                        Please enter your  name</span>
        </div>
        <h2> Cupcakes flavors</h2>

        <div class="form-group">
            <?php
            $flavors = array(
                "grasshopper" => "The Grasshopper",
                "maple" => "Whiskey Maple Bacon",
                "carrot" => "Carrot Walnut",
                "caramel" => "Salted Caramel Cupcake",
                "velvet" => "Red Velvet",
                "lemon" => "Lemon Drop",
                "tiramisu" => "Tiramisu",
            );
            foreach ($flavors as $key => $value)
            {
                echo " <input class='form-check-inline' type='checkbox' name='flavor[]' value='$key'->$value</input>" . "<br>";
            }
//            $getFlavor=$_POST["flavor"];
//            if(isset($getFlavor)){
//                foreach ($getFlavor as $item){
//                    foreach ($item as $key=>$pair)
//                    {
//                        echo $pair." ";
////                        if (array_key_exists($item, $flavors)) {
////                            echo "$pair ";
//////                        break;
////                        }
////                        else{
////                            echo "<p class='text-danger'> Invalid value for flavor</p> ";
////                        }
//                    }
////
//                }
//            }
            ?>
            <div>
                <span class="err" id="err-flavor">Please select at least one interest</span>
            </div>
        </div>
        <!--    <input type="checkbox" name="flavor" value="The Grasshopper"> The Grasshopper<br>-->
        <!--    <input type="checkbox" name="flavor" value="Whiskey Maple Bacon"> Whiskey Maple Bacon<br>-->
        <!--    <input type="checkbox" name="flavor" value="Carrot Walnut"> Carrot Walnut<br>-->
        <!--    <input type="checkbox" name="flavor" value="Salted Caramel Cupcake"> Salted Caramel Cupcake<br>-->
        <!--    <input type="checkbox" name="flavor" value="Red Velvet"> Red Velvet<br>-->
        <!--    <input type="checkbox" name="flavor" value="Lemon Drop"> Lemon Drop<br>-->
        <!--    <input type="checkbox" name="flavor" value="Tiramisu"> Tiramisu <br>-->
        <button type="submit" class="btn btn-success">Order</button>
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