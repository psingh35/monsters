<?php

class Monsters
{

    protected $name;

    //Default constructor
    function __construct($name = "myName")
    {
        $this->name = $name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function attack()
    {
        echo "<p>".$this->name . " is attacking.</p>";
    }
}

?>