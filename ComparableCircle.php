<?php
include 'Circle.php';
include 'Comparable.php';

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($obj)
    {
        $randomCircle = $obj->getRadius();
        if ($this->getRadius() > $randomCircle) {
            return 1;
        } elseif ($this->getRadius()<$randomCircle){
            return -1;
        } else{
            return 0;
        }
    }
}


