<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3b0d6c5f4c1e372519010c1462266f3d
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

        spl_autoload_register(array('ComposerAutoloaderInit3b0d6c5f4c1e372519010c1462266f3d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3b0d6c5f4c1e372519010c1462266f3d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3b0d6c5f4c1e372519010c1462266f3d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
