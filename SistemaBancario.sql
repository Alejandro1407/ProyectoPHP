CREATE DATABASE SistemaBancario;

USE SistemaBancario;

CREATE TABLE TipoUsuario(
	Id INT AUTO_INCREMENT PRIMARY KEY,
	TipoUsuario varchar(50) NOT NULL UNIQUE
);

INSERT INTO TipoUsuario VALUES (null,"Administrador");
INSERT INTO TipoUsuario VALUES (null,"Usuario");
INSERT INTO TipoUsuario VALUES (null,"Representante");

CREATE TABLE Usuario(
	Id INT AUTO_INCREMENT PRIMARY KEY,
	Nombre VARCHAR(50) NOT NULL,
    Apellidos VARCHAR(50) NOT NULL,
	Email VARCHAR(75) NOT NULL UNIQUE,
	Direccion VARCHAR(75) NOT NULL UNIQUE,
    Telefono CHAR(9) NOT NULL UNIQUE,
	Pass VARCHAR(100) NOT NULL,
	Edad INT NOT NULL,
	Sexo CHAR(1) NOT NULL,
	DUI char(10) UNIQUE,
	TipoUsuario INT,
	NIT char(17) UNIQUE NOT NULL,
	FOREIGN KEY (TipoUsuario) REFERENCES TipoUsuario(Id)
);


/*Administrador por defecto*/
INSERT INTO Usuario VALUES ( null,'administrador','administrador','administrador@gmail.com','Apopas','1234-5678',SHA2('Password01',256),19,'M','12345678-9',1,'123456789012345');

/*Cliente por defecto*/
INSERT INTO Usuario VALUES ( null,'Victor Alejandro','Alejo Gálvez','alejandroalejo714@gmail.com','Apopitha','1234-6789',SHA2('Password01',256),19,'M','21345678-9',2,'123456789012357');

/* Define el funcionamiento de las cuentas */

CREATE TABLE TipoCuenta(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    TipoCuenta VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE Empresa(
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Domicilio VARCHAR(50),
    Telefono CHAR(9) NOT NULL UNIQUE,
    IdRepresentante INT,
    FOREIGN KEY (IdRepresentante) REFERENCES Usuario(Id)
);

INSERT INTO TipoCuenta VALUES (NULL,'Personal');
INSERT INTO TipoCuenta VALUES (NULL,'Empresarial');

CREATE TABLE Cuenta(
	Id INT AUTO_INCREMENT PRIMARY KEY,
    NCuenta CHAR(25) NOT NULL,
    IdUsuario INT NOT NULL,
    TipoCuenta INT NOT NULL,
    Saldo FLOAT NOT NULL DEFAULT 100,
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(Id),
    FOREIGN KEY (TipoCuenta) REFERENCES TipoCuenta(Id)
);

Alter table Cuenta
add constraint unique (NCuenta);

/*Cuenta del Administrador*/
INSERT INTO Cuenta VALUES (NULL,'CP00 0000 00 0000000001',1,1,100);

/*Cuenta del cliente*/
INSERT INTO Cuenta VALUES (NULL,'CP00 0000 00 0000000002',2,1,100);

/* Define las transacciones */
create table modalidad(
	id int auto_increment primary key,
    modalidad varchar(25) not null
);

insert into modalidad(modalidad) values ('Efectivo'),('Cheque');


create table tipoTransaccion(
    id int auto_increment primary key,
    tipoTransaccion varchar(30)
);

insert into tipoTransaccion values (null,'Deposito'),(null,'Retiro'),(null,'Consulta');

create table transacciones(
    id int auto_increment primary key,
    idCuenta int not null,
    monto float not null,
    modalidad int not null,
    fecha datetime,
    tipoTransaccion int,
    foreign key (tipoTransaccion) references tipoTransaccion(id),
    foreign key (idCuenta) references Cuenta(id),
    foreign key (modalidad) references modalidad(id)
);

/*Tabla super pro de los intereses Bv*/
create table interes (
	idTipoTransaccion int not null,
    interes float not null,
    foreign key (idTipoTransaccion) references tipoTransaccion (id)
);

alter table interes
add nGratuitas int not null;
