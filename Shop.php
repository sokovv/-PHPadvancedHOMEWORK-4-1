<?php

class Shop
{
    public object $pdo;
    private string $table = 'shop';

    public function __construct()
    {
        $this->pdo = new PDO("sqlite:C:\Users\Валера\Desktop\Обучение(1)\Обучение(1)\Обучение\Курс PHP продвинутый\Homework4(DB)\-PHPadvancedHOMEWORK-4-1\identifier.sqlite");
    }

    public function query($sql, $params = [])
    {
        // Подготовка запроса
        $stmt = $this->pdo->prepare($sql);

        // Обход массива с параметрами
        // и подставление значений
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
        }

        // Выполняем запрос
        $stmt->execute();
        // Возвращаем ответ
        return $stmt->fetchAll();
    }

    public function getAll($sql = '', $params = []): array
    {
        return $this->query("SELECT * FROM $this->table" . $sql, $params);
    }

    public function getRow($index, $sql = '', $params = [])
    {
        $result = $this->query("SELECT * FROM $this->table" . $sql, $params);
        return $result[$index];
    }

    public function insert( $tableColumns, $values): array
    {
        $sql = 'INSERT INTO shop(id, name) VALUES(:id, :name)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':'.$tableColumns, $values);
        $stmt->execute();
        return $this->getAll();
    }

    public function update(int $id, $values): array
    {
        return $this->query("UPDATE $this->table SET name = '$values' WHERE id = $id");
    }

    public function find(int $id,): array
    {
            return $this->query("SELECT  * FROM $this->table WHERE id = $id");
    }

    public function delete(int $id): void
    {
        $this->query("DELETE FROM $this->table WHERE id = $id");
    }
}

