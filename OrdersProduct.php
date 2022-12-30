<?php

require_once('Common.php');

class OrdersProduct extends Common
{
    public string $table = 'orders_product';


    public function insert(array $tableColumns, array $values): array
    {
        $sql = 'INSERT INTO orders_product(id, orders_id, product_id, count) VALUES(:id,:orders_id, :product_id, :count)';
        $stmt = $this->pdo->prepare($sql);
        for ($i = 0; $i < count($tableColumns); $i++) {
            $stmt->bindValue(':' . $tableColumns[$i], $values[$i]);
        }
        $stmt->execute();
        return $this->getAll();
    }

    public function update(int $id, array $values): array
    {
        return $this->query("UPDATE $this->table SET (orders_id, product_id, count) = ('$values[orders_id]', '$values[product_id]', '$values[count]')  WHERE id = $id");
    }
}

