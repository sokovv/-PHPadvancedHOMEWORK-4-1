<?php

require_once('Common.php');

class Orders extends Common
{
    public string $table = 'orders';

    public function insert(array $tableColumns, array $values): array
    {
        $sql = 'INSERT INTO orders(id, created_at, shop_id, client_id) VALUES(:id, :created_at, :shop_id,:client_id)';
        $stmt = $this->pdo->prepare($sql);
        for ($i = 0; $i < count($tableColumns); $i++) {
            $stmt->bindValue(':' . $tableColumns[$i], $values[$i]);
        }
        $stmt->execute();
        return $this->getAll();
    }

    public function update(int $id, array $values): array
    {
        return $this->query("UPDATE $this->table SET (created_at, shop_id, client_id) = ('$values[created_at]','$values[shop_id]','$values[client_id]')  WHERE id = $id");
    }
}

