<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
        date_default_timezone_set('Asia/Bangkok');

        $birth = strtotime('01/10/2000');
        echo date('ดิฉันเกิดเมื่อ j-m-Y',$birth);
        $days = ['sun','Mon','tue','wed','thur','fri','sat'];
        $months = [1=>'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        $d = date('w');
        $day = $days[$d];
        $date = date('j');
        $m = date('n');
        $month = $months[$m];
        $year = date('Y');

        echo "<br> Today is $day วันที่ $date month $month year $year<br>";
        echo date("ขณะนี้เวลา H:i:s");
      
    ?>
    
</body>
</html>