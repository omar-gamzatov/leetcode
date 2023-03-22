<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit898f9dd6b92d92d619a3e9899c87c1fb
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'A' => 
        array (
            'Andrey\\Leetcode\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Andrey\\Leetcode\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit898f9dd6b92d92d619a3e9899c87c1fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit898f9dd6b92d92d619a3e9899c87c1fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit898f9dd6b92d92d619a3e9899c87c1fb::$classMap;

        }, null, ClassLoader::class);
    }
}
