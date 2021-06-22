<?php

require './autoload.php';

$rectangle = new Rectangle(10, 5, 5, 2.5);
echo $rectangle->surface($rectangle->getHeight(), $rectangle->getWidth());
$rectangle->deformation(5, 5);
$rectangle->displayProperties();