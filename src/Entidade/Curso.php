<?php

namespace Alura\Doctrine\Entidade;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;

#[Entity]
class Curso
{
    #[Id, GeneratedValue, Column]
    public int $id;
    
    #[ManyToMany(
        targetEntity:Aluno::class,
        mappedBy: "cursos"
    )]
    private Collection $alunos;
    
    public function __construct(
        #[Column]
        public readonly string $nome
    ) {
        $this->alunos = new ArrayCollection();
    }

    public function alunos(): Collection
    {
        return $this->alunos;
    }

    public function adicionarAluno(Aluno $aluno): void
    {
        if ($this->alunos->contains($aluno)) {
            return;
        }
        
        $this->alunos->add($aluno);
        $aluno->matricularAlunoCurso($this);
    }
}