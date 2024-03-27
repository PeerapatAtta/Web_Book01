<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <?php
        $sum = 0;
        echo 'Sum of 1 - ';
        for($i=1;$i<=10;$i++){
            $sum += $i;
            if ($sum >= 30){
                $x = $i;
                echo "$x = $sum";
                exit;
            };
        };
        
    
    ?>
    
</body>
</html>