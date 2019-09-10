<?php
include 'ComparableCircle.php';
$circle1 = new ComparableCircle('Circle1',9);
$circle2 = new ComparableCircle('cirlce2',8);
var_dump($circle1->compareTo($circle2));