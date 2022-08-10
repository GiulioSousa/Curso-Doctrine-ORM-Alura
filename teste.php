<?php

use Alura\Doctrine\Entidade\Aluno;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once 'vendor/autoload.php';

$gerenciadorEntidade = GerenciadorEntidade::criarGerenciadorEntidade();

$aluno = new Aluno('Giulivan');

var_dump($aluno);