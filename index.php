<?php

    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle Shop</title>
</head>
<body>
    <h1>Welcome to the Bicycle Shop</h1>

    <!-- Form that sets parameters for function that initializes Bike object -->

<form action="" method="get">
    Bike Color: <input type="text" name="bikeColor">
    <p></p>
    Bike Size: <input type="text" name="bikeSize">
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
    <label for="wheels">How many wheels?</label>
        <select id="bikeWheelSelect" name="bikeWheels">
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        </select>
    <p></p>
    <label for="gear">What gear?</label>
        <select id="bikeGear" name="bikeGear">
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=3>3</option>
        <option value=21>21</option>
        <option value=24>24</option>
        <option value=27>27</option>
        </select>
    <p></p>
    <label for="pedalSpeed">Pedal speed?</label>
        <select id="pedalSpeed" name="pedalSpeed">
        <option value="slow">Slow</option>
        <option value="medium">Medium</option>
        <option value="fast">Fast</option>
        </select>
    <p></p>
<input type="submit" value="submit" name="submit"> </form>

    <?php

        function createBike($bikeColor, $bikeSize, $bikeFrame, $bikeHandlebars, $bikeCrank, $bikeSeat, $bikeWheels){
            $newBike = new Bicycle($bikeColor, $bikeSize, $bikeFrame, $bikeHandlebars, $bikeCrank, $bikeSeat, $bikeWheels);


            echo $newBike->rideBike("slow");


        }

        if(isset($_GET['submit']))
            {
            createBike($_GET["bikeColor"],$_GET["bikeSize"], 
            $_GET["bikeFrame"], $_GET["bikeHandlebars"], $_GET["bikeCrank"],
            $_GET["bikeSeat"], $_GET["bikeWheels"]);
            } 
    ?>
</body>
</html>
