CREATE SCHEMA IF NOT EXISTS pms;

USE pms;

CREATE TABLE IF NOT EXISTS users(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS products(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price decimal(8,2)
);

CREATE TABLE IF NOT EXISTS orders(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int NOT NULL,
    total decimal(8,2),
    created_at DATETIME default(NOW()),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS order_items(
    id int AUTO_INCREMENT PRIMARY KEY,
    product_id int NOT NULL,
    order_id int NOT NULL,
    price decimal(8,2),
    qty int NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (order_id) REFERENCES orders(id)
);

INSERT INTO users(name)
VALUES ('Mohamed'),
    ('Wael'), ('Ali');

INSERT INTO products(name, price)
VALUES ("LAP",20000),
    ("Mouse",100),
    ("Keyboard",250);