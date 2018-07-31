<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14701d639738f2fdb756836de9af9fe1
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BWB\\Framework\\mvc\\models\\' => 25,
            'BWB\\Framework\\mvc\\dao\\' => 22,
            'BWB\\Framework\\mvc\\controllers\\' => 30,
            'BWB\\Framework\\mvc\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BWB\\Framework\\mvc\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'BWB\\Framework\\mvc\\dao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/dao',
        ),
        'BWB\\Framework\\mvc\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'BWB\\Framework\\mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14701d639738f2fdb756836de9af9fe1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14701d639738f2fdb756836de9af9fe1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
