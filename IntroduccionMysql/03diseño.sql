<!-- Creacion de blog sql -->

create table usuarios(
    id int(255) auto_increment not null,
    nombre  varchar(250) not null,
    apellidos  varchar(250) not null,
    email  varchar(250) not null,
    password  varchar(250) not null,
    fecha  date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT up_email UNIQUE(email)

)ENGINE=InnoDb;

create table categorias(
    id int(255) auto_increment not null,
    nombre  varchar(250) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)

)ENGINE=InnoDb;

create table entradas(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    categoria_id    int(255) not null, 
    titulo          varchar(200)not null,
    descripcion     MEDIUMTEXT  ,
    fecha           date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;









