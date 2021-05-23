<?php

namespace App\Repository;

use App\Models\Info;
use Exception;

/**
 * Class InfoRepository
 * @package App\Repository
 */
class InfoRepository extends Repository
{
    /**
     * @var string
     */
    private string $table = 'tb_info';

    /**
     * @return array
     */
    public function getAll(): array
    {
        $query = "SELECT * FROM $this->table";
        return $this->db->query($query)->fetchAll();
    }

    /**
     * @param $id
     * @return array
     */
    public function getById($id): array
    {
        $query = "SELECT * FROM $this->table WHERE id = $id";
        return $this->db->query($query)->fetchAll();
    }

    /**
     * @param Info $info
     */
    public function save(Info $info)
    {
        try {
            $sql = "INSERT INTO $this->table (titulo, descricao) VALUES (:titulo, :descricao)";

            $sqlPrepare = $this->db->prepare($sql);
            $sqlPrepare->bindValue(":titulo", $info->getTitulo());
            $sqlPrepare->bindValue(":descricao", $info->getDescricao());

            $sqlPrepare->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}