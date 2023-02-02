<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm hiểu về biến và ví dụ điển hình trong PHP</title>
</head>
<body>
    <h1>Hello mn</h1>
    <form method="GET">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php 
        $nameForm = $_GET['name'];

        echo $nameForm . ' live in Hoi An';
    ?>
</body>
</html>