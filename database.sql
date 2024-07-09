CREATE DATABASE robot_control;

USE robot_control;

CREATE TABLE commands (
    id INT AUTO_INCREMENT PRIMARY KEY,
    command VARCHAR(50) NOT NULL,
    time DATETIME NOT NULL
);