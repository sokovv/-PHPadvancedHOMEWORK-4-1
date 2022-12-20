<?php

require_once ('Common.php');

class Shop extends Common
{
    public string $table = 'shop';

    public function insert(array $tableColumns, array $values): array
    {
        $sql = 'INSERT INTO shop(id, shop_name) VALUES(:id,:shop_name)';
        $stmt = $this->pdo->prepare($sql);
        for ($i = 0; $i < count($tableColumns); $i++ ) {
            $stmt->bindValue(':' . $tableColumns[$i], $values[$i]);
        }
        $stmt->execute();
        return $this->getAll();
    }

    public function update(int $id, array $values): array
    {
        return $this->query("UPDATE $this->table SET (shop_name) = ('$values[shop_name]')  WHERE id = $id");
    }

}

