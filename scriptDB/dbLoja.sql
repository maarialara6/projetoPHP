drop database dbLoja;

create database dbLoja;
use dbLoja;

create table dbUsuarios(
codUsu int not null auto_increment,
nome varchar(50) not null,
senha varchar(15)not null,
primary key(codUsu));

desc dbUsuarios;

show tables;

insert into dbUsuarios(nome, senha) values('etecia', 'etecia');
insert into dbUsuarios(nome, senha) values('maduh', '7002@');

select * from dbUsuarios;