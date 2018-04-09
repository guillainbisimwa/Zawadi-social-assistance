DROP DATABASE IF EXISTS orange_project;
CREATE DATABASE IF NOT EXISTS orange_project CHARACTER SET utf8;

use orange_project;
set names UTF8;

CREATE TABLE  if not EXISTS client_tab
(
	id_c int not null primary key auto_increment,
	nom_client varchar(30) not null,
  num_transaction int unique,
  mail varchar(30) not null,
	etat_activation int not null DEFAULT 0
);

CREATE TABLE  if not EXISTS user
(
	id_u int not null primary key auto_increment,
	login varchar(30) not null,
  password varchar(30) not null,
  droit_acc int not null
);

CREATE TABLE  if not EXISTS transaction_tab
(
	id_t int not null primary key auto_increment,
	article  varchar(20) not null,
	somm int not null,
	code int not null,
  id_u int not null,
	/*foreign key (code) references client_tab(num_transaction),
  foreign key (id_u) references user(id_u),*/
	date_transaction timestamp NULL DEFAULT CURRENT_TIMESTAMP
);
insert into user (login,password,droit_acc) values ("admin","admin",0);
