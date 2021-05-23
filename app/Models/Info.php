<?php

namespace App\Models;

/**
 * Class Info
 * @package App\Models
 */
class Info
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $titulo;

    /**
     * @var string
     */
    private string $descricao;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
}