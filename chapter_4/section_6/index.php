<?php 
    class Animal 
    {
        final function sounding()
        {
            return 'Quy định tiếng kêu';
        }
    }

    class Cat extends Animal
    {
        public function sounding()
        {
            return 'Meo meo';
        }
    }

    $cat = new Cat();
    echo $cat->sounding();
?>
