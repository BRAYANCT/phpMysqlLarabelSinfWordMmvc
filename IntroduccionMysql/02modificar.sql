<!-- aLTERAR UNA TABLA -->
ALTER TABLE usuarios RENAME TO usuarios_reno;

<!-- cambiar nombre de una columna -->
ALTER TABLE usuarios_reno RENAME apellidos apellido varchar(250) null;

<!-- modificar -->
ALTER TABLE usuaios_reno MODIFY apellido char(40) not null;
