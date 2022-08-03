<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1662d717f874d913a3d2413e3a335ec
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1662d717f874d913a3d2413e3a335ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1662d717f874d913a3d2413e3a335ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1662d717f874d913a3d2413e3a335ec::$classMap;

        }, null, ClassLoader::class);
    }
}
