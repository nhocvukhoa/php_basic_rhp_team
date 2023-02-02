<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toán tử so sánh trong PHP</title>
</head>
<body>
    <h1>Toán tử so sánh trong PHP</h1>
    <?php 
        //==, !=, ===, !==
        $a = 10;
        $b = '5';

        if ($a == $b) {
            echo 'true';
        } else {
            echo 'false';
        }
    ?>
</body>
</html>