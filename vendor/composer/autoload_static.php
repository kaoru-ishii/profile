<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit748e6d8e69472f907846e64c57182944
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit748e6d8e69472f907846e64c57182944::$classMap;

        }, null, ClassLoader::class);
    }
}