<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5774ccb2b4c73f5f03c1b8641e00f77a
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5774ccb2b4c73f5f03c1b8641e00f77a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5774ccb2b4c73f5f03c1b8641e00f77a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
