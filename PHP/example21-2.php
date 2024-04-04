<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
        $rudes = ['xxx','yyy','zzz']; //Assume as rude word
        $msg = 'I wand zzz but she needs xxx';
        $a =[];
        foreach ($rudes as $r){
            if(stripos($msg,$r) != null){
                $a[] = $r;
            }
        }
        if(count($a) > 0){
            $str = implode('<br>',$a);
            echo "found rundes word: <br>$str";
        }
        
    ?>
    
</body>
</html>