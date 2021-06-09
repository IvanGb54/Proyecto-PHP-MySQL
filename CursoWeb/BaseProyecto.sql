SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE DistribucionesGarcia;
USE DistribucionesGarcia;

CREATE TABLE Usuario(
	Usu_cedula INT(8) PRIMARY KEY,
	Usu_nombre VARCHAR(20),
	Usu_apellido VARCHAR(20),
	Usu_email VARCHAR(30),
	Usu_clave VARCHAR(32),
	Usu_tipo VARCHAR(15)
)ENGINE=InnoDB;

CREATE TABLE Encomiendas(
	Enc_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Enc_origen VARCHAR(30),
	Enc_destino VARCHAR(30),
	Enc_localidadOrigen VARCHAR(30),
	Enc_localidadDestino VARCHAR(30),
	Enc_direccion VARCHAR(30),
	Enc_estado VARCHAR(20),
	Enc_tipo VARCHAR(20),
	Cliente_cedula INT(8),
	Cliente_nombre VARCHAR (20)
)ENGINE=InnoDB;

CREATE TABLE Cliente(
	Cliente_cedula INT(8) PRIMARY KEY,
	Cliente_nombre VARCHAR (20),
)ENGINE=InnoDB;Rivera


INSERT INTO Usuario VALUES 
('51667899', 'Juan', 'Gonzalez', 'juanchi@gmail.com', '1234', 'Recepcionista'),
('35789065', 'Pedro', 'Garcia', 'pedro@gmail.com', '345aaa346sd', 'Recepcionista')
('45732569', 'Maria', 'Fernandez', 'mariaa@gmail.com', 'sdsda45667fsf', 'Admin')
('23587975', 'Alberto', 'Soria', 'albert@gmail.com', 'sdad3545as', 'Recepcionista')
('53423478', 'Ivan', 'Bentos', 'ivann@gmail.com', 'sdsdsas45w33', 'Admin')
('45762986', 'Nicolas', 'Martinez', 'nico@gmail.com', 'sdasdaw444a', 'Recepcionista')
('23467865', 'Mershelin', 'Prado', 'mershe@gmail.com', '4562gygy45', 'Admin')
('54324567', 'Roberto', 'Cuadro', 'robert@gmail.com', 'sdasd45555a5da', 'Admin')
('56875713', 'Juana', 'Moreno', 'jjuana@gmail.com', 'adasda55a4a', 'Recepcionista')
('46578965', 'Nicole', 'Garcia', 'nicole@gmail.com', 'sds455a5a5aAdmin', 'Recepcionista');


INSERT INTO Encomiendas VALUES 
('1', 'Montevideo', 'Canelones', 'Aguada', 'Canelones', 'Calle14 esq.34','Despachada', 'Paquete', '51555909','Ivan');
('2', 'Montevideo', 'Montevideo', 'Aguada', 'Carrasco', 'Avenida Bolivia 1245','Despachada', 'Paquete', '23476589','Mario');
('3', 'Rivera', 'Canelones', 'Rivera', 'Canelones', 'Calle16 esq.4','Pendiente', 'Paquete', '76589543','Roberto');
('4', 'Canelones', 'Montevideo', 'Canelones', 'Buceo', 'Zucara 1212','Pendiente', 'Paquete', '25679878','Maria');
('5', 'Montevideo', 'Canelones', 'Aguada', 'Canelones', 'Calle11 esq.1','Cancelada', 'Paquete', '56843569','Alfredo');
('6', 'Canelones', 'Canelones', 'Aguada', 'Canelones', 'Calle14 esq.34','Despachada', 'Paquete', '14589075','Nuria');
('7', 'Rivera', 'Canelones', 'Rivera', 'Canelones', 'Calle16 esq.60','Pendiente', 'Paquete', '45876531','Agustin');
('8', 'Paysandu', 'Canelones', 'Paysandu', 'Canelones', 'Calle16 esq.6','Pendiente', 'Paquete', '78452657','Nahuel');
('9', 'Montevideo', 'Canelones', 'Aguada', 'Canelones', 'Calle3 esq.7','Cancelada', 'Paquete', '24986874','Bruno');
('10', 'Montevideo', 'Montevideo', 'Buceo', 'Cerro', 'Gambia 1366','Cancelada', 'Paquete', '14986756','Lucas');
