<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb787e095006f22886c749fd56f948a99
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb787e095006f22886c749fd56f948a99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb787e095006f22886c749fd56f948a99::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb787e095006f22886c749fd56f948a99::$classMap;

        }, null, ClassLoader::class);
    }
}
