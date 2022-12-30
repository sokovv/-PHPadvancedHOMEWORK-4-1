PRAGMA foreign_keys= on;
-- Создание таблиц
CREATE TABLE shop
(
    id        INTEGER PRIMARY KEY,
    shop_name TEXT NOT NULL,
    shop_address TEXT NOT NULL

);

CREATE TABLE product
(
    id           INTEGER PRIMARY KEY,
    product_name CHAR(128),
    price        INT,
    count        INT
);

CREATE TABLE orders
(
    id         INTEGER PRIMARY KEY,
    created_at DATE,
    shop_id    INTEGER NOT NULL,
    client_id  INTEGER NOT NULL,
    FOREIGN KEY (shop_id) REFERENCES shop (id),
    FOREIGN KEY (client_id) REFERENCES client (id)
);

CREATE TABLE orders_product
(
    id         INTEGER PRIMARY KEY,
    orders_id  INTEGER NOT NULL,
    product_id INTEGER NOT NULL,
    count      INT,
    FOREIGN KEY (orders_id) REFERENCES orders (id),
    FOREIGN KEY (product_id) REFERENCES product (id)

);

CREATE TABLE client
(
    id    INTEGER PRIMARY KEY,
    name  TEXT NOT NULL,
    phone INT
);

-- Добавление позиций
-- Для client
insert into client (name, phone)
VALUES ('Svetlana', 122122389),
       ('Valeriy', 945233123),
       ('Mihail', 4523213),
       ('Vladimir', 389453434),
       ('Sergey', 2228945);

-- Для shop
insert into shop (shop_name,shop_address)
VALUES ('DNS', 'пр.Ленина, 40'),
       ('Eldorado', 'пр.Кузнецкий, 70'),
       ('M.video', 'пр.Советский, 35'),
       ('RBT', 'пр.Мира, 10'),
       ('Tehnopark', 'пр.Октябрьский, 105');

-- Для product
insert into product (product_name, price, count)
VALUES ('Mouse pad', 200, 1),
       ('Keyboard', 800, 1),
       ('Monitor', 2000, 1),
       ('Micro', 5000, 1),
       ('Printer', 15000, 1);

-- Для orders
insert into orders (created_at, shop_id, client_id)
VALUES (date('now'), 2, 3),
       (date('now'), 2, 1),
       (date('now'), 3, 4),
       (date('now'), 4, 2),
       (date('now'), 5, 5);

-- Для orders_product
insert into orders_product (orders_id, product_id, count)
VALUES (1, 2, (SELECT count FROM product WHERE id = 2)),
       (2, 3, (SELECT count FROM product WHERE id = 3)),
       (3, 4, (SELECT count FROM product WHERE id = 4)),
       (5, 1, (SELECT count FROM product WHERE id = 1)),
       (3, 3, (SELECT count FROM product WHERE id = 3));


SELECT product.price,
       product.count,
       client.name,
       shop.shop_name,
       product.product_name
FROM orders_product
         INNER JOIN
     product ON orders_product.product_id = product.id
         INNER JOIN
     client ON orders_product.orders_id = client.id
         INNER JOIN
     shop ON orders_product.orders_id = shop.id;
-- WHERE  client.name = 'Mihail';