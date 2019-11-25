<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ca6113201f94dfacaf0a8949cd57d4d
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'edwrodrig\\qt_app_builder\\' => 25,
            'edwrodrig\\example\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'edwrodrig\\qt_app_builder\\' => 
        array (
            0 => __DIR__ . '/..' . '/edwrodrig/qt_app_builder/src',
        ),
        'edwrodrig\\example\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ca6113201f94dfacaf0a8949cd57d4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ca6113201f94dfacaf0a8949cd57d4d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
