<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c4dc6c394316b0950c193c33db751d9
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c4dc6c394316b0950c193c33db751d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c4dc6c394316b0950c193c33db751d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c4dc6c394316b0950c193c33db751d9::$classMap;

        }, null, ClassLoader::class);
    }
}
