<?php 
    $dayOfWeek = date('w');
    
    switch ($dayOfWeek) {
        case 1:
            echo 'Hôm nay là thứ 2';
            break;
        case 2:
            echo 'Hôm nay là thứ 3';
            break;
        case 3:
            echo 'Hôm nay là thứ 4';
            break;
        case 4:
            echo 'Hôm nay là thứ 5';
            break;
        case 5:
            echo 'Hôm nay là thứ 6';
            break;
        case 6: 
            echo 'Hôm nay là thứ 7';
            break;
        case 0:
            echo 'Hôm nay là chủ nhật';
            break;
    }
?>
