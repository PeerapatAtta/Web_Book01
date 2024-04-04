<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
        $thai_text=['zero','one','two','three','four','five','six','seven','eight','nine'];
        $num='50814563972';
        $len=mb_strlen($num); //11
        $text='';
        for ($i=0;$i<$len;$i++){
            $n=$num[$i];
            $text .= $thai_text[$n];
        }
        echo "$num => $text";

    ?>
</body>
</html>