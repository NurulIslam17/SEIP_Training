<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2b81059b28b2c2e31d7a6e97ceac043e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit2b81059b28b2c2e31d7a6e97ceac043e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2b81059b28b2c2e31d7a6e97ceac043e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2b81059b28b2c2e31d7a6e97ceac043e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
