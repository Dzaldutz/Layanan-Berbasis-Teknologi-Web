<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9590e74af48a6181c276a3ab1597bbf5
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dzaldutz\\WebLanjutMvc\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dzaldutz\\WebLanjutMvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9590e74af48a6181c276a3ab1597bbf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9590e74af48a6181c276a3ab1597bbf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9590e74af48a6181c276a3ab1597bbf5::$classMap;

        }, null, ClassLoader::class);
    }
}
