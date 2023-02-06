<?php 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter your name ...">
        <input type="submit" name="submitForm" value="Login">
    </form>
    <h1>Trạng thái đăng nhập</h1>
    <?php 
        $_SESSION['username'] = 'anhkhoa';       
        
        if (isset($_POST['submitForm'])) {
            $_SESSION['name'] = $_POST['name'];

            if ($_SESSION['name'] == $_SESSION['username']) {
                echo 'You are logged in!' . ' ' . 'Username: ' . $_SESSION['name'];
            } else {
                echo 'You are not logged in!';
            }
        }
    ?>
</body>
</html>
