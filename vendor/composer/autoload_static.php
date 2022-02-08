<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc229275e50d72d702e07da6c33d72941
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc229275e50d72d702e07da6c33d72941::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc229275e50d72d702e07da6c33d72941::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc229275e50d72d702e07da6c33d72941::$classMap;

        }, null, ClassLoader::class);
    }
}
