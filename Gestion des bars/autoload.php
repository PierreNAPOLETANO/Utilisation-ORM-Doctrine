<?php

function loadClass($className)
{
    if (file_exists(__DIR__ . '/classes/' . $className . '.php'))
    {
        require __DIR__ . '/classes/' . $className . '.php';
    }
}
function loadManager($className)
{
    if (file_exists(__DIR__ . '/managers/' . $className . '.php'))
    {
        require __DIR__ . '/managers/' . $className . '.php';
    }
}
spl_autoload_register('loadClass');
spl_autoload_register('loadManager');