<?php

    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle</title>
</head>
<body>
    <h1>Welcome to the Bicycle Shop</h1>

    <!-- Form that sets parameters for function that initializes Bike object -->

<form action="" method="get">

    Bike Color: <input type="text" name="bikeColor">
    <p></p>
    <label for="bikeSize">Bike Size?</label>
        <select id="bikeSize" name="bikeSize">
        <option value="tiny">Tiny</option>
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
        </select>
    <p></p>

    <input type="checkbox" id="frame" name="bikeFrame" value=true>
    <label for="frame"> Add a frame</label><br>
    <input type="checkbox" id="handlebars" name="bikeHandlebars" value=true>
    <label for="handlebars"> Add handlebars </label><br>
    <input type="checkbox" id="crank" name="bikeCrank" value=true>
    <label for="crank"> Add a crank</label><br>
    <input type="checkbox" id="seat" name="bikeSeat" value=true>
    <label for="seat"> Add a seat</label><br>
    <p></p>

    <label for="bikeWheels">Bike Wheels?</label>
        <select id="bikeWheels" name="bikeWheels">
        <option value=0>0</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        </select>
    <p></p>
<input type="submit" value="Create Bike" name="submit"> </form>


<p></p>



    <?php

        function createBike($bikeColor, $bikeSize, $bikeFrame, $bikeHandlebars, $bikeCrank, $bikeSeat, $bikeWheels){
            $newBike = new Bicycle($bikeColor, $bikeSize, $bikeFrame, $bikeHandlebars, $bikeCrank, $bikeSeat, $bikeWheels);

            if(isset($_POST['button1'])) {
                $newBike->rideBike("slow");
            }
            if(isset($_POST['button2'])) {
                echo "This is Button2 that is selected";
            }
        }

        if(isset($_GET['submit']))
            {
            createBike(
            $_GET["bikeColor"] ?? $bikeColor = "grey",
            $_GET["bikeSize"] ?? $bikeSize = "medium", 
            $_GET["bikeFrame"] ?? $bikeFrame = "false", 
            $_GET["bikeHandlebars"] ?? $bikeHandlebars = "false", 
            $_GET["bikeCrank"] ?? $bikeCrank = "false", 
            $_GET["bikeSeat"] ?? $bikeSeat = "false", 
            $_GET["bikeWheels"] ?? $bikeWheels = 2);
            }

            
    ?>
</body>
</html>
