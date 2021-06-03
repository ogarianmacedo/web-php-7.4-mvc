<?php


namespace App\Repository;

use App\Models\Mensagem;
use Exception;

/**
 * Class MensagemRepository
 * @package App\Repository
 */
class MensagemRepository extends Repository
{
    /**
     * @var string
     */
    private string $table = 'tb_mensagem';

    /**
     * @param Mensagem $mensagem
     * @return string[]
     */
    public function save(Mensagem $mensagem): array
    {
        try {
            $sql = "INSERT INTO $this->table (nome, email, mensagem, data_envio)
                    VALUES (:nome, :email, :mensagem, :data_envio)";

            $sqlPrepare = $this->db->prepare($sql);
            $sqlPrepare->bindValue(":nome", $mensagem->getNome());
            $sqlPrepare->bindValue(":email", $mensagem->getEmail());
            $sqlPrepare->bindValue(":mensagem", $mensagem->getMensagem());
            $sqlPrepare->bindValue(":data_envio",  date("d/m/Y"));

            $sqlPrepare->execute();

            return ['success' => 'Mensagem enviada com sucesso!'];
        } catch (Exception $e) {
            return ['error' => 'Não foi possível enviar mensagem!'];
        }
    }
}