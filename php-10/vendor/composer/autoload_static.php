<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29b01210668601ad17dd85a2dc00079c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit29b01210668601ad17dd85a2dc00079c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29b01210668601ad17dd85a2dc00079c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29b01210668601ad17dd85a2dc00079c::$classMap;

        }, null, ClassLoader::class);
    }
}
