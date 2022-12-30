<?php

declare(strict_types=1);

require_once('autoload.php');

$pdo = new PDO('sqlite:identifier.sqlite');

//----Первое задание----
//Создание таблиц
$sqlCreateTableShop = <<<EOF
      CREATE TABLE shop
      (id INT PRIMARY KEY ,
     shop_name TEXT NOT NULL,
     shop_address TEXT NOT NULL)
EOF;

$sqlCreateTableProduct = <<<EOF
      CREATE TABLE product
      (id INT PRIMARY KEY ,
    product_name CHAR(128),
    price        INT,
    count        INT)
EOF;

$sqlCreateTableOrders = <<<EOF
      CREATE TABLE orders
      (id INT PRIMARY KEY ,
     created_at DATE,
    shop_id    INTEGER NOT NULL,
    client_id  INTEGER NOT NULL,
    FOREIGN KEY (shop_id) REFERENCES shop (id),
    FOREIGN KEY (client_id) REFERENCES client (id))
EOF;

$sqlCreateTableOrders_product = <<<EOF
      CREATE TABLE orders_product
      (id INT PRIMARY KEY ,
    orders_id  INTEGER NOT NULL,
    product_id INTEGER NOT NULL,
    count      INT,
    FOREIGN KEY (orders_id) REFERENCES orders (id),
    FOREIGN KEY (product_id) REFERENCES product (id))
EOF;

$sqlCreateTableClient = <<<EOF
      CREATE TABLE client
      (id INT PRIMARY KEY ,
      name  TEXT NOT NULL,
      phone INT)
EOF;

//$stmt = $pdo ->exec($sqlCreateTableShop);
//$stmt = $pdo ->exec($sqlCreateTableProduct);
//$stmt = $pdo ->exec($sqlCreateTableOrders);
//$stmt = $pdo->exec($sqlCreateTableOrders_product);
//$stmt = $pdo->exec($sqlCreateTableClient);

//Добавление позиций
$sqlInsertTableShop =<<<EOF
      INSERT INTO shop (id,shop_name,shop_address)
      VALUES (1, 'DNS', 'пр.Ленина, 40');

      INSERT INTO shop (id,shop_name,shop_address)
      VALUES (2, 'Eldorado', 'пр.Кузнецкий, 70');

      INSERT INTO shop (id,shop_name,shop_address)
      VALUES (3, 'M.video', 'пр.Советский, 35');

      INSERT INTO shop  (id,shop_name,shop_address)
      VALUES (4, 'RBT', 'пр.Мира, 10');

      INSERT INTO shop  (id,shop_name,shop_address)
      VALUES (5, 'Tehnopark', 'пр.Октябрьский, 105');
EOF;

$sqlInsertTableProduct =<<<EOF
      INSERT INTO product (id,product_name, price, count)
      VALUES (1, 'Mouse pad', 200, 5);

      INSERT INTO product (id,product_name, price, count)
      VALUES (2, 'Keyboard', 800, 5);

      INSERT INTO product (id,product_name, price, count)
      VALUES (3, 'Monitor', 2000, 5);

      INSERT INTO product  (id,product_name, price, count)
      VALUES (4, 'Micro', 5000, 5);

      INSERT INTO product  (id,product_name, price, count)
      VALUES (5, 'Printer', 15000, 5);
EOF;

$sqlInsertTableOrders =<<<EOF
      INSERT INTO orders (id,created_at, shop_id, client_id)
      VALUES (1, date('now'), 2, 3);

      INSERT INTO orders (id,created_at, shop_id, client_id)
      VALUES (2, date('now'), 2, 1);

      INSERT INTO orders (id,created_at, shop_id, client_id)
      VALUES (3, date('now'), 3, 4);

      INSERT INTO orders  (id,created_at, shop_id, client_id)
      VALUES (4, date('now'), 4, 2);

      INSERT INTO orders  (id,created_at, shop_id, client_id)
      VALUES (5, date('now'), 5, 5);
EOF;

$sqlInsertTableOrders_product =<<<EOF
      INSERT INTO orders_product (id,orders_id, product_id, count)
      VALUES (1, 1, 2, 1);

      INSERT INTO orders_product (id,orders_id, product_id, count)
      VALUES (2, 2, 3, 1);

      INSERT INTO orders_product (id,orders_id, product_id, count)
      VALUES (3, 3, 4, 1);

      INSERT INTO orders_product (id,orders_id, product_id, count)
      VALUES (4, 5, 1, 1);

      INSERT INTO orders_product  (id,orders_id, product_id, count)
      VALUES (5, 3, 3, 1);
EOF;

$sqlInsertTableClient =<<<EOF
      INSERT INTO client (id,name, phone)
      VALUES (1, 'Svetlana', 122122389);

      INSERT INTO client (id,name, phone)
      VALUES (2, 'Valeriy', 945233123);

      INSERT INTO client (id,name, phone)
      VALUES (3, 'Mihail', 4523213);

      INSERT INTO client (id,name, phone)
      VALUES (4, 'Vladimir', 389453434);

      INSERT INTO client  (id,name, phone)
      VALUES (5, 'Sergey', 2228945);
EOF;


//$stmt = $pdo ->exec($sqlInsertTableShop);
//$stmt = $pdo ->exec($sqlInsertTableProduct);
//$stmt = $pdo ->exec($sqlInsertTableOrders);
//$stmt = $pdo ->exec($sqlInsertTableOrders_product);
//$stmt = $pdo ->exec($sqlInsertTableClient);



//----Второе задание-----
//$shop = new Shop();
//$client = new Client();
//$orders = new Orders();
//$product = new Product();
//$ordersProduct = new OrdersProduct();
//
//print_r($shop->find(1));
//print_r($client->find(6));
//print_r($orders->find(1));
//print_r($product->find(1));
//print_r($ordersProduct->find(1));

