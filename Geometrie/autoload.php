<?php

function loadClass($className)
{
    if (file_exists(__DIR__ . '/classes/' . $className . '.php'))
    {
        require __DIR__ . '/classes/' . $className . '.php';
    }
}

function loadTraits($traitsName)
{
    if (file_exists(__DIR__ . '/traits/' . $traitsName . '.php'))
    {
        require __DIR__ . '/traits/' . $traitsName . '.php';
    }
}

function loadInterfaces($interfaceName)
{
    if (file_exists(__DIR__ . '/interfaces/' . $interfaceName . '.php'))
    {
        require __DIR__ . '/interfaces/' . $interfaceName . '.php';
    }
}

spl_autoload_register('loadClass');
spl_autoload_register('loadTraits');
spl_autoload_register('loadInterfaces');