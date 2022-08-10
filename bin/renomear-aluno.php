<?php

use Alura\Doctrine\Entidade\Aluno;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once __DIR__ . '/../vendor/autoload.php';

$gerenciadorEntidades = GerenciadorEntidade::criarGerenciadorEntidade();
// $repositorioAlunos = $gerenciadorEntidades->getRepository(Aluno::class);

// $aluno = $repositorioAlunos->find($argv[1]);
$aluno = $gerenciadorEntidades->find(Aluno::class, $argv[1]);
$aluno->setNome($argv[2]);

// $gerenciadorEntidades->persist($aluno);
$gerenciadorEntidades->flush();
