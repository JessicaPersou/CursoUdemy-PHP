<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52b2166b56123d87e80ead87babfc292
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52b2166b56123d87e80ead87babfc292::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52b2166b56123d87e80ead87babfc292::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52b2166b56123d87e80ead87babfc292::$classMap;

        }, null, ClassLoader::class);
    }
}
