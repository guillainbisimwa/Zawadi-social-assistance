DROP DATABASE IF EXISTS orange_project;
CREATE DATABASE IF NOT EXISTS orange_project CHARACTER SET utf8;

use orange_project;
set names UTF8;

CREATE TABLE  if not EXISTS parent_tab
(
	id_c int not null primary key auto_increment,
	nom_parent varchar(30) not null,
	Age int not null,
	genre varchar(30) not null,
	etat_civil varchar(30) not null,
	Telephone varchar(30) not null,
	Fonction varchar(50) not null,
	Adresse varchar(50) not null,
	niv_rev double not null,
	taille_menage int not null,
	t_m_g int not null,
	t_m_f int not null,
	enf_sco int not null,
	enf_sco_g int not null,
	enf_sco_f int not null,
	enf_zsa int not null,
	enf_zsa_g int not null,
	enf_zsa_f int not null,
	code_zsa varchar(10)
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
