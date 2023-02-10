<?php 
    class Student {
        static $name = 'Nguyễn Văn A';

        static function getName()
        {
            return self::$name;
        }
    }

    echo Student::$name;
    echo Student::getName();
?>
