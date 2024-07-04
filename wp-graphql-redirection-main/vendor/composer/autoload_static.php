<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7bf0d245e4dde81f1cebd94de74dbcf
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQLRedirection\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQLRedirection\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQLRedirection\\I18n' => __DIR__ . '/../..' . '/include/I18n.php',
        'WPGraphQLRedirection\\Model\\RedirectionItem' => __DIR__ . '/../..' . '/include/Model/RedirectionItem.php',
        'WPGraphQLRedirection\\Type\\ObjectType\\RedirectionItem' => __DIR__ . '/../..' . '/include/Type/ObjectType/RedirectionItem.php',
        'WPGraphQL\\Type\\InterfaceType\\NodeWithIsRedirected' => __DIR__ . '/../..' . '/include/Type/InterfaceType/NodeWithIsRedirect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7bf0d245e4dde81f1cebd94de74dbcf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7bf0d245e4dde81f1cebd94de74dbcf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7bf0d245e4dde81f1cebd94de74dbcf::$classMap;

        }, null, ClassLoader::class);
    }
}
