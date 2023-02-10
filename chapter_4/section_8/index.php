<?php 
    class Student
    {
        private $name;

        public function __construct()
        {
            echo 'Đã chạy vào phương thức construct';
        }

        public function setName($value)
        {
            $this->name = $value;
        }

        public function getName()
        {
            return $this->name;
        }

        public function __destruct()
        {
            echo '<br>Đã chạy vào phương thức destruct';
        }
    }

    $stu = new Student();
    $stu->setName('Nguyễn Văn A');
    echo $stu->getName();
?>
