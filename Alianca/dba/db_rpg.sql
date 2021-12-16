create database db_rpg
default character set utf8
default collate utf8_general_ci;

use db_rpg;

insert into tbl_classe
values(default,'Guerreiro','1',
'guerreiro.png','Guerreiros são exímios lutadores marciais, sempre prontos para o combate. Possuem extremas habilidades de combate. Ele possui poderosas habilidades combativas, variando conforme o sistema de RPG utilizado.'
,'5','3','1','15','5','3','10','7','7','2','2','1','5','1');

insert into tbl_vantagens
values(default,'Guarda alta', 'Pode realizar ação de ataque e defesa no mesmo turno, em troca de movimentação');

select * from tbl_vantagens;
select * from tbl_classe;
select * from tbl_classe_vantagem;

create table tbl_classe
(
cd_classe int primary key auto_increment unique,
nm_classe varchar(25) not null,
tipo_classe int not null,
ds_classe varchar(1000) not  null,
img_classe varchar(100) not null,
classe_for int not null,
classe_dex int not null,
classe_int int not null,
classe_life int not null,
classe_mana int not null,
classe_char int not null,
class_res_for int not null,
class_res_dex int not null,
class_res_int int not null,
cres_for int not null,
cres_dex int not null,
cres_int int not null,
cres_life int not null,
cres_mana int not null
)
default charset utf8;

create table tbl_raca
(
cd_raca int primary key auto_increment,
nm_raca varchar(25) not null,
tipo_raca int not null,
ds_raca varchar(1000) not null,
img_raca varchar(100) not null,
raca_for int not null,
raca_dex int not null,
raca_int int not null,
raca_life int not null,
raca_mana int not null,
raca_char int not null,
raca_res_for int not null,
raca_res_dex int not null,
raca_res_int int not null
)
default charset utf8;

create table tbl_vantagens
(
cd_vantagem int primary key auto_increment,
nm_vantagem varchar(50) not null,
ds_vantagem varchar (2000)
)
default charset utf8;

create table tbl_desvantagens
(
cd_desvantagem int primary key auto_increment,
nm_desvantagem varchar(50) not null,
ds_desvantagem varchar (2000)
)
default charset utf8;

create table tbl_classe_vantagem
(
cd_classe integer,
cd_vantagem integer,
nm_vantagem varchar(50) not null,
ds_vantagem varchar (2000),
constraint fk_classe foreign key (cd_classe) references tbl_classe(cd_classe),
constraint fk_vantagem foreign key (cd_vantagem) references tbl_vantagens(cd_vantagem)
)
default charset utf8;
