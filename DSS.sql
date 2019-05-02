create database bancoDSS;

use bancoDSS;

create table tipoUsuario(
	id serial primary key,
	tipoUsuario varchar(50) not null unique
)

create table usuario(
		id int auto_increment primary key,
        nombre varchar(75) not null,
        email varchar(50) not null unique,
        direccion varchar(75) unique not null,
		contrasenya varchar(50) not null,
        edad int not null,
        sexo char(1) check(sexo = 'M' OR sexo = 'H'),
        DUI char(10) unique,
		tipoUsuario int,
        NIT char(17) unique not null,
		foreign key (tipoUsuario) references 
);

create table cuenta(
	id int auto_increment primary key,
    nCuenta char(19) not null,
    idCliente int not null,
    saldo float not null,
    nOpera int,
    nOperaSinRecargo int,
    interes float,
    interesR float,
    interesD float,
    interesC float,
    foreign key (idCliente) references cliente(id)
);

create table modalidad(
	id int auto_increment primary key,
    modalidad varchar(25) not null
);

insert into modalidad(modalidad) values ('Efectivo'),('Cheque');

create table depositos(
	id int auto_increment primary key,
    idCuenta int not null,
    deposito float not null,
    modalidad int not null,
    fecha datetime,
    foreign key (idCuenta) references cuenta(id)
);

alter table depositos
add constraint fk_modalidad foreign key (modalidad) references modalidad(id);

create table retiros(
	id int auto_increment primary key,
    idCuenta int not null,
    retiro float not null,
    fecha datetime,
    foreign key (idCuenta) references cuenta(id)
);

create table consulta(
	id int auto_increment primary key,
    idCuenta int not null,
    fecha datetime,
    foreign key (idCuenta) references cuenta(id)
);