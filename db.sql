create database Zapateria;
	use Zapateria;

	create table usuarios(
		idUsuario int AUTO_INCREMENT,
		usuario varchar(20),
		password varchar(20),
		primary key(idUsuario)
	);

insert into usuarios values(null,"Erik","1234");


	create table zapatos(
		id_zapatos int AUTO_INCREMENT,
		marca varchar(35),
		stock int,
		precio decimal(6,2),
		descripcion varchar(50),
		talla decimal(3,1),
		color varchar(20),
		primary key(id_zapatos)
	);

insert into zapatos values(null,"nike",5,650.89,"Zapatos deportivos",28.5,"blanco");
insert into zapatos values(null,"nike",5,650.89,"Zapatos deportivos",28.5,"negro");
insert into zapatos values(null,"nike",50,500,"Zapatos deportivos",28.5,"negro/blanco");