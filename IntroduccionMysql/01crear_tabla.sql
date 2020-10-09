<!--crear una tabla  -->

CREATE TABLE usuarios{
    id: INT(11) auto_increment not null,
    nombre: varchar(150) not null,
    apellidos:varchar(150) not null,
    email:varchar(150) ,
    password:varchar(150) not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
};


