<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các hàm măc định của PHP và cách sử dụng</title>
</head>
<body>
    <h1>Các hàm măc định của PHP và cách sử dụng</h1>

    <!-- Hàm đếm số lượng từ trong câu -->
    <?php 
        echo 'Số lượng từ trong câu: ' . str_word_count('Hello Anh Khoa');
    ?>

    <br>

    <!-- Hàm đảo ngược câu -->
    <?php 
        echo 'Câu sau khi bị đổi ngược: ' . strrev('Hello Anh Khoa');
    ?>
    
    <br>

    <!-- Hàm xác định ví trị của từ muốn tìm trong câu -->
    <?php 
        echo 'Vị trí của từ muốn tìm trong câu: ' . strpos('Hello Anh Khoa', 'Anh');
    ?>

    <br>

    <!-- Hàm thay thế từ trong câu -->
    <?php 
        echo 'Câu sau khi được thay thế từ: ' . str_replace('Anh Khoa', 'Anh Thư','Hello Anh Khoa');
    ?>
</body>
</html>