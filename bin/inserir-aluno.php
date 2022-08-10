<?php

use Alura\Doctrine\Entidade\Aluno;
use Alura\Doctrine\Entidade\Telefone;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once __DIR__ . '/../vendor/autoload.php';

$gerenciadorEntidades = GerenciadorEntidade::criarGerenciadorEntidade();

// $aluno = new Aluno('Alex Silva');
// $tel1 = /* $argv[2] */ new Telefone("(61) 1234-5678");
// $tel2 = /* $argv[3] */ new Telefone("(59) 9876-5432");
// $gerenciadorEntidades->persist($tel2);
// $gerenciadorEntidades->persist($tel1);

$aluno = new Aluno(/* $argv[1] */ "Allison Brandão");
// $aluno->adicionarTel($tel1);
// $aluno->adicionarTel($tel2);
$aluno->adicionarTel(new Telefone("(61) 1234-5678"));
$aluno->adicionarTel(new Telefone("(59) 9876-5432"));

$gerenciadorEntidades->persist($aluno);
$gerenciadorEntidades->flush();
