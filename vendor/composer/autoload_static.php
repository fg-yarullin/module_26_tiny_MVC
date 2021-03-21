<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7877270b8a0286e7717da8143629e38
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller' => __DIR__ . '/../..' . '/app/core/controller.php',
        'Controller_About' => __DIR__ . '/../..' . '/app/controllers/controller_about.php',
        'Controller_Contacts' => __DIR__ . '/../..' . '/app/controllers/controller_contacts.php',
        'Controller_Main' => __DIR__ . '/../..' . '/app/controllers/controller_main.php',
        'Controller_Portfolio' => __DIR__ . '/../..' . '/app/controllers/controller_portfolio.php',
        'Model' => __DIR__ . '/../..' . '/app/core/model.php',
        'Model_About' => __DIR__ . '/../..' . '/app/models/model_about.php',
        'Model_Contacts' => __DIR__ . '/../..' . '/app/models/model_contacts.php',
        'Model_Index' => __DIR__ . '/../..' . '/app/models/model_index.php',
        'Model_Main' => __DIR__ . '/../..' . '/app/models/model_main.php',
        'Model_Portfolio' => __DIR__ . '/../..' . '/app/models/model_portfolio.php',
        'Route' => __DIR__ . '/../..' . '/app/core/route.php',
        'View' => __DIR__ . '/../..' . '/app/core/view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7877270b8a0286e7717da8143629e38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7877270b8a0286e7717da8143629e38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7877270b8a0286e7717da8143629e38::$classMap;

        }, null, ClassLoader::class);
    }
}