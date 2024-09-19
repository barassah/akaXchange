CREATE DATABASE your_database;

USE your_database;

CREATE TABLE students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    religion VARCHAR(50) NOT NULL,
    class VARCHAR(50) NOT NULL,
    home_academy VARCHAR(50) NOT NULL,
    host_academy VARCHAR(50) NOT NULL,
    residential VARCHAR(50) NOT NULL,
    student_id VARCHAR(50) NOT NULL,
    financial_aid VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
);
