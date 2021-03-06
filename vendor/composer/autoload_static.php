<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9db57d3caa9d28033e2443e86b036309
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\db\\components\\Connection' => __DIR__ . '/../..' . '/app/db/components/Connection.php',
        'App\\db\\components\\QueryBuilder' => __DIR__ . '/../..' . '/app/db/components/QueryBuilder.php',
        'App\\models\\PostData' => __DIR__ . '/../..' . '/app/models/PostData.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9db57d3caa9d28033e2443e86b036309::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9db57d3caa9d28033e2443e86b036309::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9db57d3caa9d28033e2443e86b036309::$classMap;

        }, null, ClassLoader::class);
    }
}
