<!-- para entrar a una base de datos -->
SHOW DATABSES;
USE blog_master;
SHOW TABLES;

#crear una vistas 

CREATE VIEW entradas_con_nombres AS 
SELECT e.id,e.titulo,u.nombre  AS 'autor' c.nombre AS 'categoriass'
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id=u.id 
INNER JOIN categorias c ON e.categoria_id=c.id;

#borrar una vista

DROP VIEW entradas_con_nombres AS 
SELECT e.id,e.titulo,u.nombre  AS 'autor' c.nombre AS 'categoriass'
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id=u.id 
INNER JOIN categorias c ON e.categoria_id=c.id;
