<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php
    $min = 100;
    $max = 0;
    for ($i = 1; $i <= 5; $i++) {
        $r = rand(1, 100);
        if ($r < $min) {
            $min = $r;
        }
        if ($r > $max) {
            $max = $r;
        }
        if ($i > 1) {
            echo ', ';
        }
        echo $r;
    }
    echo "
            <br>Min: $min
            <br>Max: $max
        
        ";
    ?>
</body>

</html>