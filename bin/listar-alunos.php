<?php

use Alura\Doctrine\Entidade\Aluno;
use Alura\Doctrine\Entidade\Curso;
use Alura\Doctrine\Entidade\Telefone;
use Alura\Doctrine\Helper\GerenciadorEntidade;

require_once __DIR__ . '/../vendor/autoload.php';

$gerenciadorEntidades = GerenciadorEntidade::criarGerenciadorEntidade();
$repositorioAlunos = $gerenciadorEntidades->getRepository(Aluno::class);

/**@var Aluno[] $listaAlunos */
$listaAlunos = $repositorioAlunos->findAll();

foreach ($listaAlunos as $aluno) {
    // var_dump($aluno->getTelefones());
    // echo "\nID: {$aluno->id}\nNome: {$aluno->nome}\nTelefone(s): \n";
    echo "ID: {$aluno->id}" . PHP_EOL;
    echo "Nome: {$aluno->nome}" . PHP_EOL;

    if ($aluno->telefones()->count() > 0) {
    echo "Telefones:" . PHP_EOL;
    echo implode(', ', $aluno->telefones()
        ->map(fn (Telefone $telefone) => $telefone->numero)
        ->toArray());
    echo PHP_EOL;
    }


    if($aluno->cursos()->count() > 0){
    echo "Cursos:" . PHP_EOL;
    echo implode(', ', $aluno->cursos()
        ->map(fn (Curso $curso) => $curso->nome)
        ->toArray());
    echo PHP_EOL;
    echo PHP_EOL;
    }    

    /* foreach($aluno->getTelefones() as $telefone) {
        echo $telefone->numero . PHP_EOL;
    } */
}

// $giulio = $repositorioAlunos->find(1);
/* $aluno = $repositorioAlunos->findBy([
    'nome' => 'Giulio Sousa'
]); */

// var_dump($giulio);
// var_dump($aluno);
// echo $repositorioAlunos->count([]) . PHP_EOL;
// echo $argv[1];
