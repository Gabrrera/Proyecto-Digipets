-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Ciudades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Ciudades` (
  `idCiudad` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreCiudad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCiudad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Especialistas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Especialistas` (
  `idEspecialista` INT(11) NOT NULL AUTO_INCREMENT,
  `Cedula` VARCHAR(16) NOT NULL,
  `NombreEspecialista` VARCHAR(45) NOT NULL,
  `ApellidoEspecialista` VARCHAR(45) NOT NULL,
  `FechaNacimiento` DATE NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL,
  `IdCiudad` INT(11) NOT NULL,
  `Especialidad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEspecialista`),
  CONSTRAINT `FkEspecialistasCiudades`
    FOREIGN KEY (`IdCiudad`)
    REFERENCES `edigipee8_Digipets_QA`.`Ciudades` (`idCiudad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Especies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Especies` (
  `IdEspecie` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreEspecie` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdEspecie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Mascotas` (
  `IdMascota` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreMascota` VARCHAR(45) NOT NULL,
  `IdEspecie` INT(11) NOT NULL,
  `FechaNacimiento` DATE NOT NULL,
  PRIMARY KEY (`IdMascota`),
  CONSTRAINT `FkMascotasEspecies`
    FOREIGN KEY (`IdEspecie`)
    REFERENCES `edigipee8_Digipets_QA`.`Especies` (`IdEspecie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Clientes`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Clientes` (
  `IdCliente` INT(11)  NOT NULL AUTO_INCREMENT,
  `NombreCliente` VARCHAR(45) ,
  `ApellidoCliente` VARCHAR(45) ,
  `Email` VARCHAR(45) ,
  `Telefono` VARCHAR(15) ,
  `Direccion` VARCHAR(45) ,
  `IdCiudad` INT(11) ,
  `Barrio` VARCHAR(45) ,
  `FechaRegistro` DATE ,
  `FechaNacimiento` DATE ,
  `IdMascota` INT(11) ,
  `Cedula` VARCHAR(16) ,
  PRIMARY KEY (`IdCliente`),
  CONSTRAINT `FkClientesCiudades`
    FOREIGN KEY (`IdCiudad`)
    REFERENCES `edigipee8_Digipets_QA`.`Ciudades` (`idCiudad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`TipoConsultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`TipoConsultas` (
  `idTipoConsulta` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreTipoConsulta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoConsulta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Consultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Consultas` (
  `IdConsulta` INT(11) NOT NULL AUTO_INCREMENT,
  `IdTipoConsulta` INT(11) NOT NULL,
  `IdEspecialista` INT(11) NOT NULL,
  `IdCliente` INT(11) NOT NULL,
  `IdMascota` INT(11) NOT NULL,
  `FechaConsulta` DATE NOT NULL,
  `CostoConsulta` INT(11) NOT NULL,
  PRIMARY KEY (`IdConsulta`),
  CONSTRAINT `FkConsultasEspecialistas`
    FOREIGN KEY (`IdEspecialista`)
    REFERENCES `edigipee8_Digipets_QA`.`Especialistas` (`idEspecialista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FkConsultasMascotas`
    FOREIGN KEY (`IdMascota`)
    REFERENCES `edigipee8_Digipets_QA`.`Mascotas` (`IdMascota`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FkConsultasClientes`
    FOREIGN KEY (`IdCliente`)
    REFERENCES `edigipee8_Digipets_QA`.`Clientes` (`IdCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FkConsultasTipoConsultas`
    FOREIGN KEY (`IdTipoConsulta`)
    REFERENCES `edigipee8_Digipets_QA`.`TipoConsultas` (`idTipoConsulta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`TipoProductos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`TipoProductos` (
  `idTipoProducto` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreTipoProducto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoProducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Productos` (
  `IdProducto` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreProducto` VARCHAR(45) NOT NULL,
  `Stock` INT(11) NOT NULL,
  `IdTipoProducto` INT(11) NULL DEFAULT NULL,
  `ValorUnitario` INT(11) NOT NULL,
  PRIMARY KEY (`IdProducto`),
  CONSTRAINT `FkProductosTipoProductos`
    FOREIGN KEY (`IdTipoProducto`)
    REFERENCES `edigipee8_Digipets_QA`.`TipoProductos` (`idTipoProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Proveedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Proveedores` (
  `IdProveedor` INT(11) NOT NULL AUTO_INCREMENT,
  `NitProveedor` VARCHAR(11) NOT NULL,
  `NombreProveedor` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL,
  `IdCiudad` INT(11) NOT NULL,
  PRIMARY KEY (`IdProveedor`),
  CONSTRAINT `FkProveedoresCiudades`
    FOREIGN KEY (`IdCiudad`)
    REFERENCES `edigipee8_Digipets_QA`.`Ciudades` (`idCiudad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Facturas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Facturas` (
  `idFactura` INT(11) NOT NULL AUTO_INCREMENT,
  `IdCliente` INT(11) NOT NULL,
  `IdProducto` INT(11) NOT NULL,
  `Cantidad` VARCHAR(45) NOT NULL,
  `FechaFactura` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFactura`),
  CONSTRAINT `FkFacturasClientes`
    FOREIGN KEY (`IdCliente`)
    REFERENCES `edigipee8_Digipets_QA`.`Clientes` (`IdCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FkFacturasProductos`
    FOREIGN KEY (`IdProducto`)
    REFERENCES `edigipee8_Digipets_QA`.`Productos` (`IdProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Despachos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `edigipee8_Digipets_QA`.`Despachos` (
  `IdDespacho` INT(11) NOT NULL AUTO_INCREMENT,
  `FechaDespacho` DATE NOT NULL,
  `Cantidad` INT NOT NULL,
  `IdProveedor` INT(11) NOT NULL,
  `IdProducto` INT(11) NOT NULL,
  PRIMARY KEY (`IdDespacho`),
  CONSTRAINT `FkDespachosProveedores`
    FOREIGN KEY (`IdProveedor`)
    REFERENCES `edigipee8_Digipets_QA`.`Proveedores` (`IdProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FkDespachosProductos`
    FOREIGN KEY (`IdProducto`)
    REFERENCES `edigipee8_Digipets_QA`.`Productos` (`IdProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QAv1`.`roles`
-- -----------------------------------------------------
CREATE TABLE roles (
	Id INT(10) NOT NULL AUTO_INCREMENT,
	NombreRol VARCHAR(50) NOT NULL,
    PRIMARY KEY (Id)
);

-- -----------------------------------------------------
-- Table `edigipee8_Digipets_QA`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE usuarios (
	Id INT(10) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	correo VARCHAR(100) NOT NULL,
	contraseña VARCHAR(150) NOT NULL,
	confcontraseña VARCHAR(150) NOT NULL,
	RolId int(10) NOT NULL DEFAULT 1,
    PRIMARY KEY (id), FOREIGN KEY (RolId) REFERENCES roles (Id)
);

-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------
-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------
-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------
-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------


-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Ciudades`
-- -----------------------------------------------------

INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Bogotá');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Bucaramanga');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Cali');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Cartagena');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Medellín');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Pasto');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Pereira');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Manizales');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Armenia');
INSERT INTO edigipee8_Digipets_QA.Ciudades (NombreCiudad) VALUES ('Ibagué');

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Especialistas`
-- -----------------------------------------------------

Insert into Especialistas (Cedula,NombreEspecialista,ApellidoEspecialista,FechaNacimiento,Email,Telefono,IdCiudad,Especialidad)VALUES (1001210976, "Julian"		,"Corredor"	,"2000-09-12"	,"jmcorr@gmail.com "			,3044508922,	1, "Equinoderma");
Insert into Especialistas (Cedula,NombreEspecialista,ApellidoEspecialista,FechaNacimiento,Email,Telefono,IdCiudad,Especialidad)VALUES (10345366623, "Gabriel"	,"Barrera"	,"2000-08-03"	,"amaya11@gmail.com "		,3103215835,	1, "General");
Insert into Especialistas (Cedula,NombreEspecialista,ApellidoEspecialista,FechaNacimiento,Email,Telefono,IdCiudad,Especialidad)VALUES (11104805003, "Natalia"	,"Acosta"	,"2002-09-21"	,"nan112@gmail.com "			,3044508922,	1, "General");
Insert into Especialistas (Cedula,NombreEspecialista,ApellidoEspecialista,FechaNacimiento,Email,Telefono,IdCiudad,Especialidad)VALUES (12355675533, "Jairo"		,"Cabezas"	,"2001-10-02"	,"jairotheboss@gmail.com "	,3044508922,	2, "Equinoderma");
Insert into Especialistas (Cedula,NombreEspecialista,ApellidoEspecialista,FechaNacimiento,Email,Telefono,IdCiudad,Especialidad)VALUES (10242456463, "Camilo"	,"Lopez"	,"2000-03-28"	,"camiloti@gmail.com "		,3044508922,	2, "General");

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Especies`
-- -----------------------------------------------------

INSERT INTO edigipee8_Digipets_QA.Especies (NombreEspecie) VALUES ('Perro');
INSERT INTO edigipee8_Digipets_QA.Especies (NombreEspecie) VALUES ('Gato');
INSERT INTO edigipee8_Digipets_QA.Especies (NombreEspecie) VALUES ('Ave');
INSERT INTO edigipee8_Digipets_QA.Especies (NombreEspecie) VALUES ('Conejo');
INSERT INTO edigipee8_Digipets_QA.Especies (NombreEspecie) VALUES ('Pato');
INSERT INTO edigipee8_Digipets_QA.Especies (NombreEspecie) VALUES ('Hamster');


-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Mascotas`
-- -----------------------------------------------------

INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Luna', '2', '2020-05-20');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Kira', '4', '2018-06-12');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Bruno', '3', '2018-01-21');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Lola', '1', '2020-12-22');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Rocky', '2', '2018-09-15');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Kiara', '1', '2016-11-12');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Tony', '5', '2017-08-20');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Lucas', '3', '2021-02-05');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Simón', '1', '2017-02-08');
INSERT INTO edigipee8_Digipets_QA.Mascotas (NombreMascota, IdEspecie, FechaNacimiento) VALUES ('Spike', '1', '2019-07-17');


-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Clientes`
-- -----------------------------------------------------

Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Luis"		,"Varon"		,"luchovaron.15@gmail.com"	,3103210776,	"CLL 51-15-17"	,1,		"Quesada",			"2022-09-28",	"2002-09-28",	1,	1001219080);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Nohora"	,"Hernandez"	,"nohernadez51@gmail.com"	,3108134171,	"CLL 51-15-13"	,1, 	"Quesada",			"2022-08-21",	"1999-10-31",	2, 	41551620);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Helena"	,"Pineda"		,"helenapp@gmail.com"		,3118716725,	"CLL 153-28-10"	,1, 	"Cedritos",			"2022-08-21",	"2000-02-28",	3,	23871976);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Jorge"		,"Santander"	,"jorgsa@gmail.com"			,3044608422,	"KRA 83-28-45"	,1,		"El Retiro",		"2022-08-31",	"1990-10-21",	4, 	173882107);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Wilmer"	,"Sanchez"		,"willme2@gmail.com"		,3013845653,	"CLL 183-55-21"	,1,		"Mirandela",		"2022-10-03",	"1991-11-20",	5, 	726558965);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("William"	,"Suarez"		,"willsua@gmail.com"		,3023545353,	"CLL 179-52-22"	,2,		"Jose Felix P",		"2022-09-03",	"1988-12-25",	6, 	196718892);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Jose"		,"Soto"			,"sotojj@gmail.com"			,3023415373,	"CLL 88-11-22"	,1,		"Sauce",			"2022-09-20",	"1998-11-22",	7, 	111728839);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Wilson"	,"Socta"		,"sogchimb@gmail.com"		,3013355657,	"CLL 188-32-20"	,2,		"Jose Felix P",		"2022-10-03",	"2000-08-25",	8, 	49561346);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Ryan"		,"Castro"		,"awooo1@gmail.com"			,3106730821,	"CLL 14-32-20"	,2,		"El Poblado",		"2022-10-05",	"1994-08-22",	9, 	11177738);
Insert into edigipee8_Digipets_QA.Clientes (NombreCliente,ApellidoCliente,Email,Telefono,Direccion,IdCiudad,Barrio,FechaRegistro,FechaNacimiento,IdMascota,Cedula)VALUES("Juan"		,"Montoya"		,"gpf1@gmail.com"			,3112346471,	"CLL 21-5-20"	,1,		"Macarena",			"2022-10-05",	"1990-05-29",	10, 18089668);
-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`TipoConsultas`
-- -----------------------------------------------------

insert into TipoConsultas (NombreTipoConsulta) values ('Consulta General');
insert into TipoConsultas (NombreTipoConsulta) values ('Peluqueria');
insert into TipoConsultas (NombreTipoConsulta) values ('Perdida de peso');
insert into TipoConsultas (NombreTipoConsulta) values ('Caida de pelo');
insert into TipoConsultas (NombreTipoConsulta) values ('Habitos no comunes');
insert into TipoConsultas (NombreTipoConsulta) values ('Consulta General');
insert into TipoConsultas (NombreTipoConsulta) values ('Infeccion de herida');
insert into TipoConsultas (NombreTipoConsulta) values ('Medicina preventiva');
insert into TipoConsultas (NombreTipoConsulta) values ('Urgencia');
insert into TipoConsultas (NombreTipoConsulta) values ('Ortopedia');

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Consultas`
-- -----------------------------------------------------

INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (10,3,1,5,	'2022-01-27', 50000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (1,2,2,10,	'2022-07-17', 25000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (9,3,8,4,		'2022-05-15', 35000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (2,4,9,1,		'2022-06-07', 16000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (10,3,9,7,	'2022-08-08', 50000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (3,5,7,9,		'2022-02-05', 40000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (6,5,5,6,		'2022-07-10', 25000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (4,1,9,1,		'2022-05-10', 38000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (8,1,4,2,		'2022-05-22', 18000);
INSERT INTO edigipee8_Digipets_QA.Consultas (IdTipoConsulta,IdEspecialista,IdCliente,IdMascota,FechaConsulta,CostoConsulta) VALUES (1,4,10,3,	'2022-05-30', 25000);


-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`TipoProductos`
-- -----------------------------------------------------
INSERT INTO edigipee8_Digipets_QA.TipoProductos (NombreTipoProducto) VALUES ('Comida');
INSERT INTO edigipee8_Digipets_QA.TipoProductos (NombreTipoProducto) VALUES ('Aseo mascota');
INSERT INTO edigipee8_Digipets_QA.TipoProductos (NombreTipoProducto) VALUES ('Medicamentos');

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Productos`
-- -----------------------------------------------------

/*
Tipo Producto 1 = Comida
Tipo Producto 2= Aseo mascota
Tipo Producto 3 = Medicamentos
*/

INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Ringo','14','1','90300');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Chunky','16','1','69300');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Mirringo','15','1','70600');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Gatsy','10','1','19800');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Petys','12','2','32000');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Pedigree','20','1','3000');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Dogchow','15','1','96400');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Crema para alergias','20','3','44600');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Purgante','19','3','10000');
INSERT INTO edigipee8_Digipets_QA.Productos (NombreProducto,Stock,IdTipoProducto,ValorUnitario) VALUES ('Antiparasitos','18','3','10400');

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Proveedores`
-- -----------------------------------------------------

insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (321245893,'Animals Productosctos veterinarios','AnimalsPv@hotmail.com','3125896364',1);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (256341879,'Productos farmaceuticos veterinarios','PruductsF@hotmail.com','3159648522',2);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (789514269,'Agv Salud animal','AgvSalud@hotmail.com','3204487512',3);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (962315874,'DSQA Productos farmaceuticos','DSQAprod@gmail.com','3214569872',4);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (452631789,'Agro veterinaria servicampo','AgroVet@gmail.com','3016547899',1);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (478596382,'Proveedora Agro comercial','AgroComercial@hotmail.com','3165589633',5);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (124589637,'Distribuidora Romland','Romland@gmail.com','3186654789',7);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (782652482,'Grupo vega Pets','VegaPets@hotmail.com','3209691125',5);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (124875253,'Incolpets','Incolpets@hotmail.com','3112406158',1);
insert into edigipee8_Digipets_QA.Proveedores (NitProveedor, NombreProveedor, Email, Telefono, IdCiudad) values (653251588,'La res.S.A.S','LaRes@gmail.com','3205697897',10);


-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Facturas`
-- -----------------------------------------------------

insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (5,1,3,"2020-02-14");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (2,2,1,"2020-05-01");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (4,3,8,"2020-05-20");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (5,4,2,"2020-01-11");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (6,4,3,"2020-02-09");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (10,6,5,"2020-07-17");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (9,7,1,"2020-07-08");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (7,1,9,"2020-03-26");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (2,1,4,"2020-04-06");
insert into edigipee8_Digipets_QA.Facturas (IdCliente, Idproducto, Cantidad, FechaFactura) values (1,9,10,"2020-05-15");

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`Despachos`
-- -----------------------------------------------------


insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-05-12",12,1,1);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-01-20",10,2,2);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-03-08",9,3,3);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-02-20",23,4,4);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-04-10",50,5,5);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-04-20",18,6,6);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-02-25",15,7,7);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-06-25",8,8,8);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-04-01",37,9,9);
insert into edigipee8_Digipets_QA.Despachos (FechaDespacho, Cantidad, IdProveedor, IdProducto) values ("2022-07-19",31,10,10);

-- -----------------------------------------------------
-- Inserts Table `edigipee8_Digipets_QA`.`roles`
-- -----------------------------------------------------

insert into edigipee8_Digipets_QA.roles (NombreRol) values ("publico");
insert into edigipee8_Digipets_QA.roles (NombreRol) values ("administrador");