<?php

namespace App\Config;

/**
 * Class Request
 * @package App\Config
 */
class Request
{
    /**
     * @var array
     */
    public array $params;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    /**
     * @param $nome
     * @return bool
     */
    public function __get($nome): bool
    {
        if (isset($this->params[$nome])) {
            return $this->params[$nome];
        }

        return false;
    }
}