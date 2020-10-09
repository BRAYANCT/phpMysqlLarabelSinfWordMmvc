<!-- Crear  base de datos de un cuestionario -->
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
    id int(10) auto_increment not null,
    modelo varchar (100) not null, 
    marca  varchar (100) not null,
    precio int (20) not null,
    stock  int (255) not null,
    CONSTRAINTT pk_coches PRIMARY KEY(id) 
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id int(10) auto_increment not null,
    nombre varchar(100)not null,
    ciudad varchar(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id int(10) auto_increment not null,
    grupo_id int(10) not null,
    jefe int(10) not null,
    nombre varchar(100)not null,
    epellidos varchar(100)not null,
    cargo varchar(100),
    fecha date ,
    sueldo  float(20,2) ,
    comision float (10,2) ,
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
    id int(10) auto_increment not null,
    vendedor_id int(10) not null,
    nombre  varchar(100) ,
    ciudad varchar(100) ,
    gastado float (10,2) ,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;
CREATE TABLE encargos(
    id int(10) auto_increment not null,
    cliente_id int(10) not null,
    coche_id int(10)  not null,
    cantidad    int(100),
    fecha       date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

<!-- INSERTAR -->

#coches

    INSERT INTO coches VALUES(NULL,'renaul cilo','ytr',1200,13);
    INSERT INTO coches VALUES(NULL,'asd cilo','rty',1500,33);
    INSERT INTO coches VALUES(NULL,'qwe cilo','r',600,10);
    INSERT INTO coches VALUES(NULL,'zxc cilo','fgb',100,3);
    INSERT INTO coches VALUES(NULL,'ghj cilo','ssgf',400,0);

#grupos

    INSERT INTO grupos VALUES(NULL,'venderoes a','peru');
    INSERT INTO grupos VALUES(NULL,'venderoes b','chile');
    INSERT INTO grupos VALUES(NULL,'venderoes c','uruguay');
    INSERT INTO grupos VALUES(NULL,'venderoes d','argentina');
    INSERT INTO grupos VALUES(NULL,'venderoes e','venezuela');
    INSERT INTO grupos VALUES(NULL,'venderoes f','ecuador');

#vendedores

    INSERT INTO vendedores VALUES(NULL,1,1,'brayan','pepe lucho','jefe supremo',CURDATE(),30000,80);
    INSERT INTO vendedores VALUES(NULL,2,1,'andres','pepe lucho','jefe supremo',CURDATE(),6000,1);
    INSERT INTO vendedores VALUES(NULL,3,1,'capcha','pepe lucho','jefe supremo',CURDATE(),10000,4);
    INSERT INTO vendedores VALUES(NULL,4,1,'taype','pepe lucho','jefe supremo',CURDATE(),3000,8);
    INSERT INTO vendedores VALUES(NULL,5,1,'gg','pepe lucho','jefe supremo',CURDATE(),300,10);

#clientes

    INSERT INTO clientes VALUES(NULL,1,'brayan','junin',30000);
    INSERT INTO clientes VALUES(NULL,2,'andres','lambayeque',500);
    INSERT INTO clientes VALUES(NULL,3,'caaaa','satipo',300);
    INSERT INTO clientes VALUES(NULL,4,'pepe','tarma',3000);
    INSERT INTO clientes VALUES(NULL,5,'lucho','ucallalt',150000);

#encargados

    INSERT INTO encargos VALUES(NULL,1,1,1,CURDATE());
    INSERT INTO encargos VALUES(NULL,2,2,2,CURDATE());
    INSERT INTO encargos VALUES(NULL,3,3,3,CURDATE());
    INSERT INTO encargos VALUES(NULL,4,4,4,CURDATE());
    INSERT INTO encargos VALUES(NULL,5,5,5,CURDATE());

<!-- Consultas 1 -->

SELECT cantidad,nombre
FROM encargos,clientes 
WHERE encargos.cliente_id=clientes.id;

SELECT cantidad,nombre,modelo
FROM encargos,clientes,coches 
WHERE encargos.cliente_id=clientes.id AND encargos.coche_id=coches.id;

<!-- consulta2: modificar la comision de los vendedores y poner al 2 cuando ganan mas de  50 000 mil -->

UPDATE vendedores SET comision=0.01 WHERE sueldo>=50000;

<!-- ejercicio 3: incrementar el precio de todos los coches en un 5% -->

UPDATE coches SET precio=precio*1.05;

<!-- ejercicio4 : sacar todos los vendedores cuya fecha de alta sea mayor a 01 de julio del 2020 -->

SELECT * FROM vendedores WHERE fecha>='2020-10-01';

<!-- ejercicio5:listar todos los vendedores y mostrar su nombre y los dias que lleva trabajando -->

SELECT nombre , DATEDIFF(CURDATE() ,fecha) AS 'dias' FROM vendedores;
UPDATE vendedores SET fecha='2019-12-03' WHERE id=4;

<!-- ejercicio6: visualizar el nombre y el apellido de los vendedores en una misma columna su fecha de registro y el dia de la semana que se registraron -->

SELECT CONCAT(nombre,' ',apellidos) AS 'Nombre',fecha,DAYNAME(fecha) FROM vendedores;

<!-- ejercicio07 : mostrar el nombre y el salario de los vendedores con cargo de  jefe supremo -->
UPDATE vendedores SET cargo='administrador'  WHERE id=1;

SELECT nombre,sueldo FROM vendedores WHERE cargo='jefe supremo';

<!-- ejercicio 08 : visualizar todos los cohces cuya marca existan la letra a y cuyo modelo empiese por f -->

SELECT  * FROM coches WHERE marca LIKE'%a%'  AND modelo LIKE 'f%';

<!-- ejercicio 09: mostrar todos los vendedores del grupo numero ordenados por salario de mayor -->

SELECT * FROM vendedores WHERE grupo_id=2 ORDER BY sueldo DESC;

<!-- ejercicio 10: visualizar los apellidos de los vendedores su fecha y su numero de grupo ordenado por fecha desc y limitar los 4 ultimos -->

SELECT epellidos ,fecha ,id FROM vendedores ORDER BY fecha DESC LIMIT 4;

<!-- ejercicio 11:VISUALIZAR TODOS LOS CARGOS Y EL NUMERO DE VENDEDORES QUE HAY EN CADA CARGO -->

SELECT cargo,COUNT(id) AS vendedores FROM vendedores GROUP BY cargo;

<!-- ejercicio 12: CONSEGUIR LA MASA SALARIAL DEL CONSESIONARIO ANUAL -->

SELECT SUM(sueldo) AS 'masa salarial' FROM vendedores;

<!-- ejercicio 13 : SACAR LA MDEDIA DE SUELDOS ENTRE TODOS LOS VENDEDORES POR GRUPO -->

SELECT CEIL(AVG(v.sueldo)) as 'sueldo', v.grupo_id as 'grupo id' , g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
GROUP BY grupo_id;

<!-- EJERCICIO 14: VISUALIZAR LAS UNIDADES TOTALES DE CADA COCHE  A CADA CLIENTE -->

SELECT co.modelo,cl.nombre,SUM(e.cantidad) AS 'cantidad' FROM encargos e
INNER JOIN coches co ON co.id=e.coche_id
INNER JOIN clientes cl ON cl.id=e.cliente_id
GROUP BY e.coche_id,e.cliente_id;

<!-- EJERCICIO 15 : MOSTRAR LOS DOS CLIENTES QUE MAS PEDIDOS HAN HECHO Y MOSTRAR CUANTOS ISIERON -->

    SELECT c.nombre AS 'cliente', COUNT(e.id) AS 'pedidos' FROM  encargos e
    INNER JOIN clientes c ON c.id=e.cliente_id
    GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

<!-- EJERCICIO 16 :  listado de clientes atendidos por el vendedor 'brayan'-->

SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre='brayan' AND ciudad='junin');

<!-- EJERCICIO 17: obtener listado conlos encargos relizados por el cliente '' fruteria antonia inc-->

    SELECT e.id AS 'numero encargo',cantidad,c.nombre,co.modelo,e.fecha
    FROM encargos e
    INNER JOIN clientes c ON c.id=e.cliente_id
    INNER JOIN coches co ON co.id=e.coche_id
    WHERE cliente_id IN
    (SELECT id FROM clientes WHERE nombre='brayan');

<!--EJERCICIO 18 :LISTA LOS CLIENTES QUE ISIERON UN ENCARGO DEL COCHE   renaul cilo -->    

SELECT * from clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN 
( SELECT id FROM coches WHERE modelo='renaul cilo')
);

SELECT * from clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN 
( SELECT id FROM coches WHERE modelo LIKE'%renaul cilo%')
);

<!-- 19ejercicio : tenemos que obtener los vendedores con 2 o mas clientes -->

SELECT * FROM vendedores WHERE id IN
( SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2 );

<!-- 20ejercicios: seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar ek nombre del grupo-->

SELECT * FROM grupos WHERE id IN
(select grupo_id FROM vendedores WHERE sueldo =
( SELECT MAX(sueldo) FROM vendedores));

<!-- EJERCICIO 21: obtener los nombre y ciudades de los clientes con encargos de 3 unicades adelante -->

SELECT nombre,ciudad FROM clientes WHERE id IN (
    SELECT cliente_id FROM encargos WHERE cantidad>=3
);

<!-- EJERCICIO22: mostrar el numer o el nombre del vendedor que se registro -->

SELECT c.id,c.nombre,v.id ,CONCAT(v.nombre ,' ',v.epellidos) 
FROM clientes c, vendedores v 
WHERE c.vendedor_id=v.id; 

<!-- EJERCICIO23: Listar todos los encargos reslizados con la marca del coche y el nombre del cliente -->

SELECT e.id,co.marca,c.nombre FROM encargos e
INNER JOIN coches co ON co.id=e.coche_id
INNER JOIN clientes c ON c.id=e.cliente_id;

<!-- EJERCICIO24: Listar los encargos con el coche nombre del cliente nnombre de la ciudad ypero unicamente sea de madid -->

SELECT e.id,co.modelo,c.nombre,c.ciudad  FROM encargos e
INNER JOIN coches co ON co.id=e.coche_id
INNER JOIN clientes c ON c.id=e.cliente_id
WHERE c.ciudad='junin';

<!-- EJERCICIO25:OBTENER UNA LISTA DE LOS NOMBRE DE LOS CLIENTES CON EL IMPORTE DE SUS ENCARGOS ACUMULADOS -->

SELECT ci.nombre, SUM(precio*cantidad) AS "IMPORTES"
FROM clientes ci
INNER JOIN encargos en ON ci.id=en.cliente_id
INNER JOIN coches co ON en.coche_id=co.id
GROUP BY ci.nombre;

<!-- EJERCICIO26: sacar  los vendedores que tengan  jefe y el nombre del jefe-->

SELECT v1.nombre AS 'vendedor',v2.nombre AS 'jefe' FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe=v2.id ;

<!-- EJERCICI 27 -->
SELECT *FROM vendedores ORDER BY fecha ASC LIMIT 1;

SELECT * FROM coches HERE id IN(
    SELECT coche_id FROM encargos WHERE cantidad IN(
        SELECT MAX(unidades) FROM encargos
    )
);