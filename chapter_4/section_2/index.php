<?php 
    class Person 
    {
        protected $name = "Nguyễn Vũ Anh Khoa";

        protected $phone= "0912345678";
    }

    class Student extends Person {
        public function getName()
        {
            return $this->name;
        }

        public function getPhone()
        {
            return $this->phone;
        }
    }

    $student1 = new Student();

    echo $student1->getName();
    echo $student1->getPhone();
?>
