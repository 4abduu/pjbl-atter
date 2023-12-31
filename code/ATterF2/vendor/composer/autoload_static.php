<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe0430416f883747e11f10e3a873dcae
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe0430416f883747e11f10e3a873dcae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe0430416f883747e11f10e3a873dcae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe0430416f883747e11f10e3a873dcae::$classMap;

        }, null, ClassLoader::class);
    }
}
