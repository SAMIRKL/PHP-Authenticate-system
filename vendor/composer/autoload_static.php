<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb432a387434ebb9247e06494b4c9e798
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb432a387434ebb9247e06494b4c9e798::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb432a387434ebb9247e06494b4c9e798::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb432a387434ebb9247e06494b4c9e798::$classMap;

        }, null, ClassLoader::class);
    }
}