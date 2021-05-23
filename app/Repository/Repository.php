<?php

namespace App\Repository;

use App\Database\Connection;
use PDO;

/**
 * Class Repository
 * @package App\Repository
 */
abstract class Repository
{
    /**
     * @var PDO
     */
    protected PDO $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = $this->getConnection();
    }

    /**
     * @return PDO
     */
    private function getConnection(): PDO
    {
        return Connection::getDb();
    }
}