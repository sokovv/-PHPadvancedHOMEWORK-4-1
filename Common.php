<?php

require_once 'DatabaseWrapper.php';

class Common implements DatabaseWrapper
{
    protected object $pdo;
    public string $table;

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

    public function insert(array $tableColumns, array $values): array
    {
        // TODO: Implement insert() method.
    }

    public function update(int $id, array $values): array
    {
        // TODO: Implement update() method.
    }

    public function find(int $id,): array
    {
        return $this->query("SELECT  * FROM $this->table WHERE id = $id");
    }

    public function delete(int $id): bool
    {
        $this->query("DELETE FROM $this->table WHERE id = $id");
        return true;
    }
}

