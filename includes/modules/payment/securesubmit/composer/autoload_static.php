<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit320440fc30d455b5d5906b1127dec42c
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GlobalPayments\\Api\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GlobalPayments\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/globalpayments/php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit320440fc30d455b5d5906b1127dec42c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit320440fc30d455b5d5906b1127dec42c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
