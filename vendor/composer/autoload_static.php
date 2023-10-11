<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit127db0c4b906c51bd7926ea119aeaaa1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laxman\\Able\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laxman\\Able\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit127db0c4b906c51bd7926ea119aeaaa1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit127db0c4b906c51bd7926ea119aeaaa1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit127db0c4b906c51bd7926ea119aeaaa1::$classMap;

        }, null, ClassLoader::class);
    }
}
