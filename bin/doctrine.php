<?php

use Alura\Doctrine\Helper\GerenciadorEntidade;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// replace with path to your own project bootstrap file
require_once __DIR__ . '/../vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$gerenciadorEntidade = GerenciadorEntidade::criarGerenciadorEntidade();

ConsoleRunner::run(
    new SingleManagerProvider($gerenciadorEntidade),
);