<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f7492bc892f6227bb5c0c5888892471
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Model',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f7492bc892f6227bb5c0c5888892471::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f7492bc892f6227bb5c0c5888892471::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f7492bc892f6227bb5c0c5888892471::$classMap;

        }, null, ClassLoader::class);
    }
}
