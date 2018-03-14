login [ID, username, password]
user [Id, nome, datanasc, descricao]
Post [ID,Titulo,Id_Genero,Data,Conteudo]
Genero [ID_genero, nome]
Comment [Id_Coment,username,conteudo]
Likes [Id_like,qtde]

create table COMMENT 
(Id_Comment int AUTO_INCREMENT,
nome varchar(50),
conteudo text,
post int);

alter table add CONSTRAINT pk_idComment primary key (id_Comment);
alter table add CONSTRAINT fk_IdPost foreign Key (post) references Post(Id_Post);

create table Post
	(Id_Post int AUTO_INCREMENT,
	 Titulo text,
	 Conteudo text,
	 Likes int,
	 data date,
	 genero int,
     autor int,
     

CONSTRAINT pk_Post primary key (Id_Post),
CONSTRAINT fk_IdAutor FOREIGN key (autor) REFERENCES User(id_user));
CONSTRAINT fk_idGenero foreign key genero references Genero(id_Genero));

create table Post_Autor
	(Id_Post int,
	id_Autor int,
	CONSTRAINT pk_PostAutor primary key (Id_Post,id_Autor));

	insert into user values(1,"Tamie","testezin","Baita Escritora",str_to_date('30-01-1998','%d-%m-%Y'),"teste");
		