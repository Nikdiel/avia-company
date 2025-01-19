CREATE DATABASE IF NOT EXISTS `avia-company`;

USE `avia-company`;

CREATE TABLE flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    flight_number VARCHAR(10),
    departure_city VARCHAR(50),
    arrival_city VARCHAR(50),
    departure_time DATETIME,
    arrival_time DATETIME,
    price DECIMAL(10, 2),
    seats_total INT,
    seats_available INT
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    flight_id INT,
    seat_number INT,
    booking_date DATETIME,
    status ENUM('reserved', 'paid', 'cancelled'),
    FOREIGN KEY (flight_id) REFERENCES flights(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE race (
    id INT AUTO_INCREMENT PRIMARY KEY,
    departure_city VARCHAR(50),
    arrival_city VARCHAR(50),
    departure_time DATETIME,
    arrival_time DATETIME,
    price DECIMAL(10, 2)
);