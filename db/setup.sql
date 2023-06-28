CREATE DATABASE IF NOT EXISTS `rstinfosysdb`;

USE `rstinfosysdb`;

CREATE TABLE IF NOT EXISTS Admins (
    admin_id INT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    created_at DATETIME,
    last_login DATETIME DEFAULT CURRENT_TIMESTAMP
);
