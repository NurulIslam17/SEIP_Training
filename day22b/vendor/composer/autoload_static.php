<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3af7a22684494fdd46210e2ef9d04725
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3af7a22684494fdd46210e2ef9d04725::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3af7a22684494fdd46210e2ef9d04725::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3af7a22684494fdd46210e2ef9d04725::$classMap;

        }, null, ClassLoader::class);
    }
}