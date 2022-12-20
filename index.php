<?php

declare(strict_types=1);

require_once('autoload.php');


$shop = new Shop();
$client = new Client();
$orders = new Orders();
$product = new Product();
$ordersProduct = new OrdersProduct();

print_r($shop->find(1));
print_r($client->find(6));
print_r($orders->find(1));
print_r($product->find(1));
print_r($ordersProduct->find(1));

// Получаем и выводим данные

//Добавление позиции
//echo "<pre>";


//$insertTable = [
//    'name',
//    'phone',
//];
//$insertValue= [
//    'Alexey',
//    '9234056789',
//];
////
//$client->insert($insertTable, $insertValue);

//Удаление
//echo "<pre>";
//$shop->delete(7);

//Поиск
//echo "<pre>";
//print_r($shop->find(3));

//Обновление

//$clientsUpdate = [
//    'name' => 'Vasiliy',
//    'phone' => '1111111111',
//];

//echo "<pre>";
//$client->update(2, $clientsUpdate);

//$ordersUpdate = [
//    'created_at' => '2023-01-01',
//    'shop_id' => '2',
//    'client_id' => '2',
//];


//$ordersUpdate = [
//    'orders_id' => '1',
//    'product_id' => '1',
//];
//
//$ordersProduct->update(5, $ordersUpdate);

//echo "<pre>";
//$orders->update(2, $ordersUpdate);

//$shopUpdate = [
//    'shop_name' => 'Samsung',
//];

//echo "<pre>";
//$shop->update(3, $shopUpdate);

//$clientUpdate = [
//    'name' => 'Valeriy',
//    'phone' => '2222222222222',
//];
//
//
//$client->update(2, $clientUpdate);

//$productUpdate = [
//    'product_name' => 'Mouse',
//    'price' => '300',
//    'count' => '1'
//];
//
//
//$product->update(1, $productUpdate);

//Показать все элементы

//print_r($shop->getAll());

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

