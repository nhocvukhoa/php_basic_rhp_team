<?php 
    if (isset($_GET['name'])) {
        echo $_GET['name'];
    }

    if (isset($_POST['name'])) {
        echo $_POST['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm hiểu về $ GET và $ POST, phân biệt sự khác nhau</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Click">
    </form>
</body>
</html>
