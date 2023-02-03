<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính bằng PHP</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="numberA" placeholder="Nhập số A">
        <input type="text" name="numberB" placeholder="Nhập số B">
        <select name="operator" id="">
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="submit" name="submit" value="Tính">
    </form>
    <p>Kết quả của phép tính là: </p>

    <?php 
        if (isset($_GET['submit'])) {
            $numberA = $_GET['numberA'];
            $numberB = $_GET['numberB'];
            $operator = $_GET['operator'];

            switch ($operator) {
                case 'addition': 
                    echo $numberA + $numberB;
                    break;
                case 'subtraction':
                    echo $numberA - $numberB;
                    break;
                case 'multiplication': 
                    echo $numberA * $numberB;
                    break;
                case 'division':
                    if ($numberB != 0) {
                        echo $numberA / $numberB;
                    }
                    break;
            }
        }
    ?>
</body>
</html>