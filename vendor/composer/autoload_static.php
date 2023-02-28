<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit191a21a424121cf7e17cc937a9a78570
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gustavo\\ApiSptrans\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gustavo\\ApiSptrans\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit191a21a424121cf7e17cc937a9a78570::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit191a21a424121cf7e17cc937a9a78570::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit191a21a424121cf7e17cc937a9a78570::$classMap;

        }, null, ClassLoader::class);
    }
}