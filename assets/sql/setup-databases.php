<?php
require '../php/dbhandler.php';

$sql = "CREATE DATABASE IF NOT EXISTS 0342518db;

USE 0342518db;
CREATE TABLE IF NOT EXISTS products (
    product_id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(32) NOT NULL,
    product_price FLOAT(8,2) NOT NULL,
    product_image VARCHAR(32) NOT NULL DEFAULT 'noImage.png',
    product_visible BOOLEAN NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS users (
    user_idno INT(8) AUTO_INCREMENT PRIMARY KEY,
    user_password VARCHAR(32) NOT NULL,
    user_email VARCHAR(32) NOT NULL,
    user_phone INT(12),
);

CREATE TABLE IF NOT EXISTS addresses (
    user_idno INT(8) NOT NULL PRIMARY KEY FOREIGN KEY REFERENCES users(user_idno),
    address_number INT(4) NOT NULL,
    address_street VARCHAR(32) NOT NULL,
    address_taman VARCHAR(32),
    address_city VARCHAR(32),
    address_state VARCHAR(32),
    address_postcode INT(6),
    address_country VARCHAR(32)
);

CREATE TABLE IF NOT EXISTS orders (
    order_id INT(16),
    order_item INT(3),
    user_idno INT(8) FOREIGN KEY REFERENCES users(user_idno),
    product_id INT(4) FOREIGN KEY REFERENCES products(product_id),
);
";