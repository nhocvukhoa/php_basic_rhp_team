<?php 
    interface Swim
    {
        public function canSwim();
    }

    interface Fly {
        public function canFly();
    }

    interface Run 
    {
        public function canRun();
    }

    abstract class Animal
    {
        abstract function head();
        abstract function eye();
    }

    class Cat extends Animal implements Swim, Run
    {
        public function head()
        {
            return __METHOD__;
        }

        public function eye()
        {
            return __METHOD__;
        }

        public function canSwim()
        {
           echo 'Con mèo biết bơi.<br>';
        }

        public function canRun()
        {
            echo 'Con mèo chạy nhanh.<br>';
        }
    }

    $cat = new Cat();
    $cat->canSwim();
    $cat->canRun();

    class Birth extends Animal implements Fly 
    {
        public function head()
        {
            return __METHOD__;
        }

        public function eye()
        {
            return __METHOD__;
        }

        public function canFly()
        {
            echo 'Con chim biết bay';
        }
    }

    $birth = new Birth();
    $birth->canFly();
?>
