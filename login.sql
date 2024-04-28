#BASE DE DATOS PARA MICKLESS

create database login;

use login;

create table usuarios(
	usu_id int primary key auto_increment,
	usu_nombre varchar(50) not null,
    usu_telefono int not null,
    usu_correo varchar(50) not null
);

show tables;

ALTER TABLE usuarios MODIFY COLUMN usu_telefono VARCHAR(50);

select *from usuarios;

INSERT INTO usuarios (usu_nombre, usu_telefono, usu_correo, contraseña)
VALUES ('Juan Rodriguez', 3142687763, 'jjuanrodriguex@gmail.com', '37450037450');

DELETE FROM usuarios WHERE usu_id = 3;

ALTER TABLE usuarios
ADD contraseña varchar(64);