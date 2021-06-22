drop database tp_data;
create database tp_data;
use tp_data;

create table bar
(
	id integer auto_increment primary key,
    name varchar(255),
    address varchar(255),
    type varchar(255)
);

insert into bar (name, address, type) values ('the billard', '22 rue du pont Paris', 'billard');
select * from bar;

create table commande
(
	id integer auto_increment,
    idBar integer,
    boisson varchar(255),
    prix integer,
    primary key (id, idBar),
    constraint foreign key (idBar) references bar(id)
);

select * from commande;