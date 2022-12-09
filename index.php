<?php

declare(strict_types=1);

require_once('autoload.php');


$shop = new Shop();
$client = new Client();
$orders = new Orders();

// Получаем и выводим данные

//Добавление позиции
//echo "<pre>";
//print_r($shop->insert('name', 'Gipermar'));

//Удаление
//echo "<pre>";
//$shop->delete(3);

//Поиск
//echo "<pre>";
//print_r($shop->find(2));

//Обновление
//echo "<pre>";
//$shop->update(1, 'Lg');

echo "<pre>";
$orders->update(1, '2023-12-08', 'Andrey', 'Telephone');

////Показать все элементы
echo "<pre>";
print_r($orders->getAll());

//echo "<pre>";
//print_r($shop->getRow(0));


//Из вебинара
//$pdo = new PDO("sqlite:C:\Users\Валера\Desktop\Обучение(1)\Обучение(1)\Обучение\Курс PHP продвинутый\Homework4(DB)\-PHPadvancedHOMEWORK-4-1\identifier.sqlite");


//Удаление позиции
//$pdo->Query("DELETE FROM shop WHERE id = 7");

//$sth = $pdo->query('SELECT * FROM shop');
//
//$rows = $sth->fetchAll();
//
//foreach ($rows as $row) {
//    echo $row['id'] . ' | ' . $row['name'] . "\n";
//}

//$dbh = new PDO('mysql:host = localhost;dbname = test', '$user', '$pass');
//
//$sth = $dbh->query('SELECT * FROM countries');
//$rows = $stm->fetchAll();
//
//print_r($rows);

