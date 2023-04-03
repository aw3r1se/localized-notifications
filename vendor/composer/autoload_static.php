<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f9068e1904bbee5cbc8540353756119
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aw3r1se\\LocalizedNotifications\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aw3r1se\\LocalizedNotifications\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f9068e1904bbee5cbc8540353756119::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f9068e1904bbee5cbc8540353756119::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f9068e1904bbee5cbc8540353756119::$classMap;

        }, null, ClassLoader::class);
    }
}
