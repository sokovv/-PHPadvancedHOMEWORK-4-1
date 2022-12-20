<?php

require_once('Common.php');

class Product extends Common
{
    public string $table = 'product';

    public function insert(array $tableColumns, array $values): array
    {
        $sql = 'INSERT INTO product(id, product_name, price, count) VALUES(:id, :product_name, :price, :count)';
        $stmt = $this->pdo->prepare($sql);
        for ($i = 0; $i < count($tableColumns); $i++) {
            $stmt->bindValue(':' . $tableColumns[$i], $values[$i]);
        }
        $stmt->execute();
        return $this->getAll();
    }

    public function update(int $id, array $values): array
    {
        return $this->query("UPDATE $this->table SET (product_name, price, count) = ('$values[product_name]','$values[price]','$values[count]')  WHERE id = $id");
    }
}

