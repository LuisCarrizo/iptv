<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf15931b4e618b6b8380385332f0b464e
{
    public static $files = array (
        '0216e5c83c4e2923f18e80de32ee3f95' => __DIR__ . '/..' . '/wikired/wrStartUp.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wikired\\' => 8,
        ),
        'F' => 
        array (
            'ForceUTF8\\' => 10,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
        'I' => 
        array (
            'Ddeboer\\Imap\\' => 13,
        ),
        'M' => 
        array (
            'Moment\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wikired\\' => 
        array (
            0 => __DIR__ . '/..' . '/wikired',
        ),
        'ForceUTF8\\' => 
        array (
            0 => __DIR__ . '/..' . '/neitanod/forceutf8',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
        'Ddeboer\\Imap\\' => 
        array (
            0 => __DIR__ . '/..' . '/ddeboer/imap/src',
        ),
        'Moment\\' => 
        array (
            0 => __DIR__ . '/..' . '/fightbulc/moment/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf15931b4e618b6b8380385332f0b464e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf15931b4e618b6b8380385332f0b464e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
