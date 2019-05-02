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
		foreign key (tipoUsuario) references tipoUsuario(id)
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

delimiter //
create procedure registrarCliente(
	v_nombre varchar(75),
    v_email varchar(50),
    v_direccion varchar(75),
    v_edad int,
    v_sexo char(1),
    v_DUI char(10),
    v_NIT char(17)
)
begin
	declare v_contar int;
    if (v_nombre not LIKE '%[0-9]%') then
		begin
			set v_contar = (select count(*) from cliente where email = v_email);
            if (v_contar = 0) then
				begin
					if (v_direccion REGEXP '^[0-9]+$') then
						begin
							if (v_sexo = 'M' OR v_sexo = 'H') then
								begin
									if (v_DUI LIKE '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][-][0-9]') then
										begin
											set v_contar = (select count(*) from cliente where DUI = v_DUI);
                                            if (v_contar = 0) then
												begin
													if (v_NIT LIKE '[0-9][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9][0-9][0-9][-][0-9][0-9][0-9][-][0-9]') then
														begin
															set v_contar = (select count(*) from cliente where NIT = v_NIT);
															if (v_contar = 0) then
																begin
																	insert into cliente(nombre, email, direccion, edad, sexo, DUI, NIT)
                                                                    values (v_nombre, v_email, v_direccion, v_edad, v_sexo, v_DUI, v_NIT);
                                                                end;
															else
																begin
																	select 'El NIT ya esta resgistrado';
                                                                end;
															end if;
                                                        end;
													else
														begin
															select 'El NIT no cumple con el formato establecido (4 numeros + 1 guion + 6 numero + 1 guion + 3 numeros + 1 guion + 1 numero)';
                                                        end;
													end if;
                                                end;
											else
												begin
													select 'El DUI ya esta registrado';
                                                end;
											end if;
                                        end;
									else
										begin
											select 'El dui no cumple con el formato establecido (8 numeros + 1 guion + 1 numero)';
                                        end;
									end if;
                                end;
							else
								begin
									select 'El sexo solo puede ser hombre(H) o mujer(M)';
                                end;
							end if;
                        end;
					else
						begin
							select 'La direccion no puede ser completamente númerica';
                        end;
					end if;
				end;
            else
				begin
					select 'El email ya esta registrado';
				end;
			end if;
        end;
    else
		begin
			select 'El nombre no puede contener valores numericos';
        end;
	end if;
end//
delimiter ;
