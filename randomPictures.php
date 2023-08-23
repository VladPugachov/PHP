<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sakums {
            grid-template-columns: auto auto auto auto auto;
            grid-template-rows: auto auto;
            display: grid;
            gap: 10px;
            justify-items: center;
        } 
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Images generator</h1>
    <div class="sakums">
        <?php
        $x = 0;
        while($x < 50) {
            $random = rand(1, 1000);
            echo '<div><img src="https://picsum.photos/300?random=' .$random.'"></div>';
            $x++;
        }
         ?>
    </div>
</body>
</html>