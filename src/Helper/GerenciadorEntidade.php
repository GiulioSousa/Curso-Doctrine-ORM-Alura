<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

Class GerenciadorEntidade
{
    public static function criarGerenciadorEntidade(): EntityManager
    {
        /* $isDevMode = true;
        $proxyDir = null;
        $cache = null; */
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__ . "/.."],
            /* $isDevMode*/ true
            /* $proxyDir,
            $cache */
        );

        $conn = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite'
        ];

        return EntityManager::create($conn, $config);
    }
}