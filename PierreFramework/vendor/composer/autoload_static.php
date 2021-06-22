<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9aa0d4c8d3ad3e2fe63b7ad4ab791fae
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PierreFramework\\' => 16,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'E' => 
        array (
            'Entity\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PierreFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/pierreframework',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/entity',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/apps',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9aa0d4c8d3ad3e2fe63b7ad4ab791fae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9aa0d4c8d3ad3e2fe63b7ad4ab791fae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9aa0d4c8d3ad3e2fe63b7ad4ab791fae::$classMap;

        }, null, ClassLoader::class);
    }
}