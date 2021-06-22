<?php

function loadClass($className)
{
    require './' . $className . '.php';
}

spl_autoload_register('loadClass');
