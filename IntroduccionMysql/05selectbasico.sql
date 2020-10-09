<!-- select apra una base de datos -->
SELECT * FROM usuarios;

<!-- operadores -->
SELECT email,(4+7) AS 'suma' FROM usuarios;

<!-- Consultas con condicion -->
SELECT * FROM usuarios WHERE email='admin@admin.com';

SELECT * FROM usuarios WHERE YEAR(fecha)!=2019 OR ISNULL(fecha);
<!-- 
    o or  ||
    y and &&
    no not
    LIKE '%letra adelante'
    LIKE 'letra atas%'
    LIKE '_desconocido'

 -->
SELECT email FROM usuarios WHERE apellido LIKE'%a%' AND password=123;

<!-- select por fechas y acendentes o desendentes -->
SELECT * FROM usuarios ORDER BY fecha ASC;
SELECT * FROM usuarios ORDER BY fecha DESC;
<!-- select con limites de 0 a 4 o solo los tres rimeros -->
SELECT * FROM usuarios LIMIT 0,4;
SELECT * FROM usuarios LIMIT 3;

<!-- ////////////////////////////////////////////////////
        Consultas multitablas
//////////////////////////////////////////////////// -->
<!--seleccion con and  -->

SELECT e.titulo,u.nombre,c.nombre  AS 'autor'
FROM usuarios u,entradas e,categorias c
WHERE e.usuario_id=u.id AND e.categoria_id=c.id;

#inner join = MUESTRA LAS DATABLKAS QUE ESTAN DISPONIBLES

SELECT e.id,e.titulo,u.nombre  AS 'autor' c.nombre AS 'categoriass'
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id=u.id 
INNER JOIN categorias c ON e.categoria_id=c.id;


SELECT e.titulo,u.nombre,c.nombre  AS 'autor'
FROM usuarios u,entradas e,categorias c
WHERE e.usuario_id=u.id;


<!-- mostrar elnombre de las categorias y al lado cuanras entradas tienen -->
SELECT c.nombre COUNT(e.id) AS 'categoria' FROM categorias c, entradas e 
WHERE e.categoria_id=c.id GROUP BY e.categoria_id; 

#left join = MUESTRA TODAS LAS FILAS AUN QUE NO HAYGUE NADA DE LA IZQUIERDA EN ESTE CASO ENTRADAS

SELECT c.nombre COUNT(e.id) AS 'categoria'
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id=c.id
GROUP BY e.categoria_id;

#RINGT join = MUESTRA TODAS LAS FILAS AUN QUE NO HAYGUE NADA DE LA DERECHA EN ESTE CASO CATEGORIAS

SELECT c.nombre COUNT(e.id) AS 'categoria'
FROM categorias c
RIGHT JOIN entradas e ON e.categoria_id=c.id
GROUP BY e.categoria_id;

<!-- mostrar el email de usuarios y al lado cuantas entradas tinen -->

SELECT u.email ,COUNT(titulo)  FROM usuarios u,entradas e
WHERE e.usuario_id=u.id GROUP BY e.usuario_id ;

