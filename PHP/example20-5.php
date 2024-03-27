<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
        $count = 0;
        do{
            $r = rand(1,100);
            $count++;
        }while($r < 80);

        echo "
            Must random $count ea then number more than 80+ <br>
            Number: $r <br>
        ";

    ?>
    
</body>
</html>