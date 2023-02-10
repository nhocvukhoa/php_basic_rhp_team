<?php 
    class Student 
    {
        protected $name = 'Nguyễn Văn A';
        protected $email = 'a@gmail.com';

        public function getName() 
        {
            return $this->name. ' at '. $this->getTime();
        }

        public function getEmail() 
        {
            return $this->email;
        }

        protected function getTime()
        {
            return date('Y-m-d H:s', time());
        }
    }

    $object1 = new Student();

    echo $object1->getName();
?>  
