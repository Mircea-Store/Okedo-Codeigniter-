<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9d376c1ffc169d062000162584abae8
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/iyzico/iyzipay-php/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInite9d376c1ffc169d062000162584abae8::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
