<?php

function autoload($className)
{
    require './classes/' . $className . '.php';
}

spl_autoload_register('autoload');