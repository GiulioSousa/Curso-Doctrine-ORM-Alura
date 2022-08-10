<?php

namespace Alura\Doctrine\Entidade;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
class Aluno
{
    #[Id]
    #[GeneratedValue]
    #[Column]
    public int $id;

    #[OneToMany(
        mappedBy: "aluno", 
        targetEntity: Telefone::class, 
        cascade:["persist", "remove"]
    )]
    // private iterable $telefones;
    private Collection $telefones;

    #[ManyToMany(
        targetEntity: Curso::class,
        inversedBy: "alunos"
    )]
    private Collection $cursos;

    public function __construct(
        #[Column]
        public readonly string $nome
    ) {
        $this->telefones = new ArrayCollection();
        $this->cursos = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /* public function __get($name)
    {
        $metodo = 'get' . ucfirst($name);
        $this->$metodo();
    } */

    public function adicionarTel(Telefone $numero)
    {
        // $this->telefones[] = $numero;
        $this->telefones->add($numero);
        $numero->setAluno($this);
    }

    public function telefones(): Collection
    {
        return $this->telefones;
    }

    public function cursos(): Collection
    {
        return $this->cursos;
    }

    public function matricularAlunoCurso(Curso $curso): void
    {
        if ($this->cursos->contains($curso)) {
            return;
        }

        $this->cursos->add($curso);
        $curso->adicionarAluno($this);
    }
}
