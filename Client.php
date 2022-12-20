<?php
require_once('Common.php');

class Client extends Common
{
    public string $table = 'client';

    public function insert($tableColumns, $values): array
    {
        $sql = 'INSERT INTO client(id, name, phone) VALUES(:id,:name, :phone)';
        $stmt = $this->pdo->prepare($sql);
        for ($i = 0; $i < count($tableColumns); $i++) {
            $stmt->bindValue(':' . $tableColumns[$i], $values[$i]);
        }
        $stmt->execute();
        return $this->getAll();
    }

    public function update(int $id, array $values): array
    {
        return $this->query("UPDATE $this->table SET (name, phone) = ('$values[name]','$values[phone]')  WHERE id = $id");
    }
}

