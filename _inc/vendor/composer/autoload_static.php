<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0cba3f3132fb657d758a5c0a969dfd1
{
    public static $files = array (
        'ea6c6ca82c7cfd0c0bf52bd926c101fc' => __DIR__ . '/..' . '/joseph-lenton/php-error/src/php_error.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0cba3f3132fb657d758a5c0a969dfd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0cba3f3132fb657d758a5c0a969dfd1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}