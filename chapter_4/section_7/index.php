<?php 
    class Animal
    {
        private $name;

        public function setName($value)
        {
            $this->name = $value;
        }

        public function getName()
        {
            return $this->name;
        }
    }

    $catA = new Animal();
    $catA->setName('Con mèo A');

    $catB = clone $catA;
    $catB->setName('Con mèo B');

    echo $catB->getName();
    echo '<br>';
    echo $catA->getName();
?>
