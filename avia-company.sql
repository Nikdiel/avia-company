-- Создание базы данных
CREATE DATABASE IF NOT EXISTS `avia-company`;

-- Использование базы данных
USE `avia-company`;

-- Создание таблицы "tickets"
CREATE TABLE IF NOT EXISTS `tickets` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `departure_date` DATE NOT NULL,
    `arrival_date` DATE NOT NULL,
    `full_name` VARCHAR(255) NOT NULL,
    `price` DECIMAL(10, 2) NOT NULL
);

-- Создание таблицы "account"
CREATE TABLE IF NOT EXISTS `account` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_full_name` VARCHAR(255) NOT NULL,
    `login` VARCHAR(255) NOT NULL,
    `password` INT NOT NULL,
    `data_reg` DATE NOT NULL
);