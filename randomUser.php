<!DOCTYPE html>
<html>
<head>
    <title>Random Users</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="number" name="value" placeholder="Enter Users Value">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
if(isset($_POST['submit'])){
    $value = $_POST['value'];
    $json = file_get_contents("https://randomuser.me/api/?results=$value");
    $randomUsers = json_decode($json, true);

    foreach($randomUsers['results'] as $user) {
        echo "<h2>" .$user['name']['first'] . " " . $user['name']['last'] . "</h2>";
        echo "<p>Gender: " . $user['gender'] . "</p>";
        echo "<img src='" . $user['picture']['large'] . "'alt='picture'/>";
        echo "<p>Email: " . $user['email'] . "</p>";
        echo "<p>Phone: " . $user['phone'] . "</p>";
        echo "<p>Country: " . $user['location']['country'] . "</p>";
        echo "<hr>";
    }
}
?>


</body>

</html>