<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67dadd824d61a03431ab9b2ab9b04520
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67dadd824d61a03431ab9b2ab9b04520::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67dadd824d61a03431ab9b2ab9b04520::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67dadd824d61a03431ab9b2ab9b04520::$classMap;

        }, null, ClassLoader::class);
    }
}
