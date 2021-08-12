<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit417240d12e63c3e872b8e418a5bcd894
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'M' => 
        array (
            'MiniUrl\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'MiniUrl\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtymek/mini-url/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit417240d12e63c3e872b8e418a5bcd894::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit417240d12e63c3e872b8e418a5bcd894::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit417240d12e63c3e872b8e418a5bcd894::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit417240d12e63c3e872b8e418a5bcd894::$classMap;

        }, null, ClassLoader::class);
    }
}