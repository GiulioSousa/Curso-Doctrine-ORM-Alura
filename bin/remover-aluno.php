<?php

use Alura\Doctrine\Entidade\Aluno;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once __DIR__ . '/../vendor/autoload.php';

$gerenciadorEntidade = GerenciadorEntidade::criarGerenciadorEntidade();
// $aluno = $gerenciadorEntidade->find(Aluno::class, $argv[1]);
$aluno = $gerenciadorEntidade->find(Aluno::class, $argv[1]);

/* var_dump($aluno);
exit(); */

$gerenciadorEntidade->remove($aluno);
$gerenciadorEntidade->flush();
