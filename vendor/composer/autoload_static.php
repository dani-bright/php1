<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5da74a64d28142aed32599f5bdf20535
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5da74a64d28142aed32599f5bdf20535::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5da74a64d28142aed32599f5bdf20535::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
