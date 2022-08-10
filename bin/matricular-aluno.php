<?php

use Alura\Doctrine\Entidade\Aluno;
use Alura\Doctrine\Entidade\Curso;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once __DIR__ . '/../vendor/autoload.php';

$gerenciarEntidades = GerenciadorEntidade::criarGerenciadorEntidade();

$idAluno = $argv[1];
$idCurso = $argv[2];

$aluno = $gerenciarEntidades->find(Aluno::class, $idAluno);
$curso = $gerenciarEntidades->find(Curso::class, $idCurso);

$aluno->matricularAlunoCurso($curso);

$gerenciarEntidades->flush();