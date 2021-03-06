<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit156c77e49a65ee2e2a01973367a98a66
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Parkour\\' => 8,
        ),
        'E' => 
        array (
            'Essence\\Http\\' => 13,
            'Essence\\Dom\\' => 12,
            'Essence\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Parkour\\' => 
        array (
            0 => __DIR__ . '/..' . '/fg/parkour/lib',
        ),
        'Essence\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/essence/http/src',
        ),
        'Essence\\Dom\\' => 
        array (
            0 => __DIR__ . '/..' . '/essence/dom/src',
        ),
        'Essence\\' => 
        array (
            0 => __DIR__ . '/..' . '/essence/essence/lib/Essence',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit156c77e49a65ee2e2a01973367a98a66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit156c77e49a65ee2e2a01973367a98a66::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
