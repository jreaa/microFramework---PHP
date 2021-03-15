<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04cafaeecfcdadc6e8465bea3095c07b
{
    public static $files = array (
        '64b7eced020615212a4d3400a4fe77e4' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04cafaeecfcdadc6e8465bea3095c07b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04cafaeecfcdadc6e8465bea3095c07b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04cafaeecfcdadc6e8465bea3095c07b::$classMap;

        }, null, ClassLoader::class);
    }
}