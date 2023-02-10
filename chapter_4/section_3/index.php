<?php 
    class Person 
    {
        private $notice = 'Dữ liệu được ghi đè';

        public function getMessage()
        {
            echo $this->notice . __METHOD__;
        }
    }

    class Student extends Person
    {
        private $notice = 'Thông báo từ sinh viên';

        public function getMessage()
        {
            //Lấy ra được method của thằng cha mặc dù đã bị ghi đè
            parent::getMessage();
            echo '<br>' . $this->notice . __METHOD__;
        }
    }

    $student1= new Student();
    $student1->getMessage();
?>
