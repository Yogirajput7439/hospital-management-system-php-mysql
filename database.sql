CREATE DATABASE hospital;

USE hospital;

CREATE TABLE patients(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
age INT,
disease VARCHAR(100),
doctor VARCHAR(100),
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERT INTO users (name,email,password,role)
-- VALUES ('Admin','admin@gmail.com',MD5('123456'),'admin');