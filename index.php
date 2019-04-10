<?php
include "Circle2.php";
$circleOne = new Circle2('circleOne', 8);
$circleTwo = new Circle2('circleTwo', 2);
$circleThree = new Circle2('circleThree', 4);
$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test;
