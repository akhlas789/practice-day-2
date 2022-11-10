<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe7bfb9e462311e77ece14363344fbfc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe7bfb9e462311e77ece14363344fbfc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe7bfb9e462311e77ece14363344fbfc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe7bfb9e462311e77ece14363344fbfc::$classMap;

        }, null, ClassLoader::class);
    }
}