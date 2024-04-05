<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
        $q = $_GET['q'];
    ?>
    <p>
        Search: <b> <?= $q ?></b><br>
        Total data: <?= rand(100,1000)?> data
    </p>
    
</body>
</html>