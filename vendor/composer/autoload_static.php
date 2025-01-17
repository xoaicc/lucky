<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42c134a308975cb30e0c68ebc4d2ff55
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lucky\\Template\\' => 15,
            'Lucky\\Includes\\' => 15,
            'Lucky\\Database\\' => 15,
            'Lucky\\Constants\\' => 16,
            'Lucky\\Api\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lucky\\Template\\' => 
        array (
            0 => __DIR__ . '/../..' . '/template',
        ),
        'Lucky\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Lucky\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'Lucky\\Constants\\' => 
        array (
            0 => __DIR__ . '/../..' . '/constants',
        ),
        'Lucky\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42c134a308975cb30e0c68ebc4d2ff55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42c134a308975cb30e0c68ebc4d2ff55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42c134a308975cb30e0c68ebc4d2ff55::$classMap;

        }, null, ClassLoader::class);
    }
}
