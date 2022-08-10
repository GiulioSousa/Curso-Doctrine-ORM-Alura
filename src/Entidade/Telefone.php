<?php

namespace Alura\Doctrine\Entidade;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;

#[Entity]
class Telefone
{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[ManyToOne(targetEntity: Aluno::class, inversedBy: "telefones")]
    public readonly Aluno $aluno;

    public function __construct(
        #[Column(length: 14)]
        public readonly string $numero
    ) { 
    }

    public function setAluno(Aluno $aluno): void
    {
        $this->aluno = $aluno;
    }
}