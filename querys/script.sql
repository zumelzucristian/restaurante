create database restaurante

create table comida (
id int,
nombre varchar(20),
precio decimal,
descripcion text
)

insert into comida 
values(2, 'sopa', 10, 'sopa de pollo')

select * from comida;

select nombre from comida;

update comida set precio = 20;

update comida set precio = 30 where id = 1;

update comida set precio = 30 , nombre = 'Pizza' where id = 1;

update comida set descripcion = 'pizza grande' where id = 1;

delete from comida;

delete from comida  where id = 1;