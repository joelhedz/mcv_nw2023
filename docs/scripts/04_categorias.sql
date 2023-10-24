-- Active: 1697864686722@@127.0.0.1@3306@nwdb
CREATE TABLE categorias(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    name VARCHAR(255) NOT NULL COMMENT "Name",
    status CHAR(3) NOT NULL DEFAULT 'AC' COMMENT 'Status',
    create_time DATETIME COMMENT 'Create Time'
) COMMENT 'Categorías de los productos ';