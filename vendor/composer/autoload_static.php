<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31294e57f6f6128ac2b9c9eb49a65c75
{
    public static $files = array (
        'b9fa40d76e3a17d43fa5f112ac14719d' => __DIR__ . '/..' . '/paynow/php-sdk/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Paynow\\' => 7,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Paynow\\' => 
        array (
            0 => __DIR__ . '/..' . '/paynow/php-sdk/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31294e57f6f6128ac2b9c9eb49a65c75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31294e57f6f6128ac2b9c9eb49a65c75::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}