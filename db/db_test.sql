DROP DATABASE IF EXISTS base_test;
CREATE DATABASE base_test;
USE base_test;

CREATE TABLE rols(
id_role INT PRIMARY KEY AUTO_INCREMENT,
rol_name VARCHAR(45) NOT NULL,
estatus VARCHAR(5)
)Engine=InnoDB;

CREATE TABLE users(
id_user INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(45) NOT NULL,
secret_password VARCHAR(100) UNIQUE NOT NULL,
complete_name VARCHAR(200),
id_role INT NOT NULL DEFAULT 2,
token VARCHAR(100) UNIQUE DEFAULT NULL,
fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
estatus VARCHAR(5) DEFAULT 'A'
)Engine=InnoDB;

CREATE TABLE login_register(
id_user INT NOT NULL,
check_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)Engine=InnoDB;

DROP TRIGGER IF EXISTS register_token_new;

DELIMITER $$
CREATE TRIGGER register_token_new
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
	SET NEW.token = md5(uuid());
END$$
DELIMITER ;

INSERT INTO rols(rol_name, estatus) VALUES('admin', 'A'),('user', 'A');

/*SELECT * FROM users;
SELECT * FROM login_register;*/

/*
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE TABLE users;
TRUNCATE TABLE login_register;
SET FOREIGN_KEY_CHECKS=1;
*/
