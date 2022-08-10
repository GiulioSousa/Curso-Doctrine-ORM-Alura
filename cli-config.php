<?php

use Alura\Doctrine\Helper\GerenciadorEntidade;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project
require_once 'vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$gerenciadorEntidade = GerenciadorEntidade::criarGerenciadorEntidade();

return ConsoleRunner::createHelperSet($gerenciadorEntidade);