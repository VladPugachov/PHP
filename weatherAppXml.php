<?php
if(isset($_POST['submit'])){
    $city = $_POST['city'];
    $url = "https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=489eb65c063b405c25a990930a59ccd0&units=metric&mode=xml";
    $response = file_get_contents($url);
    $xml = simplexml_load_string($response);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="city" placeholder="Enter City Name">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo "<h2>".$xml->city['name'].",".$xml->city->country."</h2>";
            echo "<h3>Weather</h3>";
            echo "<p>".$xml->weather['value']."</p>";
            echo "<h3>Temperature</h3>";
            echo "<p>".$xml->temperature['value']."&deg;C</p>";
            echo "<h3>Humidity</h3>";
            echo "<p>".$xml->humidity['value']."%</p>";
            echo "<h3>Pressure</h3>";
            echo "<p>".$xml->pressure['value']." hPa</p>";
            echo "<h3>Wind Speed</h3>";
            echo "<p>".$xml->wind->speed['value']." m/s</p>";
            echo "<h3>Wind Direction</h3>";
            echo "<p>".$xml->wind->direction['name']."</p>";
            echo "<h3>Visibility</h3>";
            echo "<p>".$xml->visibility['value']." m</p>";
        }
    ?>
</body>
</html>