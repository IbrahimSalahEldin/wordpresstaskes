<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58d8e1a583601510457f523b9f74096a
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\Pinterest\\' => 33,
            'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\' => 51,
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
        'Automattic\\WooCommerce\\Pinterest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\WooCommerce\\ActionSchedulerJobFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/woocommerce/action-scheduler-job-framework/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58d8e1a583601510457f523b9f74096a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58d8e1a583601510457f523b9f74096a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58d8e1a583601510457f523b9f74096a::$classMap;

        }, null, ClassLoader::class);
    }
}
