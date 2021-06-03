<?php

namespace App\Models;

use DateTime;

/**
 * Class Mensagem
 * @package App\Models
 */
class Mensagem
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $nome;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $mensagem;

    /**
     * @var DateTime
     */
    private DateTime $dataEnvio;

    /**
     * @var bool
     */
    private bool $visualizada;

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
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    /**
     * @param string $mensagem
     */
    public function setMensagem(string $mensagem): void
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @return DateTime
     */
    public function getDataEnvio(): DateTime
    {
        return $this->dataEnvio;
    }

    /**
     * @param DateTime $dataEnvio
     */
    public function setDataEnvio(DateTime $dataEnvio): void
    {
        $this->dataEnvio = $dataEnvio;
    }

    /**
     * @return bool
     */
    public function isVisualizada(): bool
    {
        return $this->visualizada;
    }

    /**
     * @param bool $visualizada
     */
    public function setVisualizada(bool $visualizada): void
    {
        $this->visualizada = $visualizada;
    }
}