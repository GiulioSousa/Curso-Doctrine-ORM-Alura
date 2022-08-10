<?php

use Alura\Doctrine\Entidade\Curso;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once __DIR__ . '/../vendor/autoload.php';

$gerenciadorEntidades = GerenciadorEntidade::criarGerenciadorEntidade();

// $curso = new Curso('Doctrine');
$curso = new Curso($argv[1]);

$gerenciadorEntidades->persist($curso);
$gerenciadorEntidades->flush();
