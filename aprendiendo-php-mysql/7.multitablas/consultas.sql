/* 
Consulta multitabla
sirven para consultar varias tablas en una sola sentencia
 */
SELECT  e.id, u.nombre, u.apellidos, c.nombre, e.titulo, e.descripcion, e.fecha 
FROM    entradas as e, usuarios as u, categorias as c 
WHERE   e.usuario_id = u.id
AND     e.categoria_id = c.id;

/* con inner join */
SELECT  e.id, u.nombre, u.apellidos, c.nombre, e.titulo, e.descripcion, e.fecha 
FROM    entradas as e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

/* Mostrar el nombre de categorias y al lado cuantas entradas tiene */
SELECT c.nombre,COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

/* con inner join */
SELECT c.nombre,COUNT(e.id) FROM categorias c
INNER JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/* con left join 
muestra todos los registros de la tabla de la izquierda
aunque no tengan datos en la tabla de la derecha
*/

SELECT c.nombre,COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

SELECT c.nombre,COUNT(e.id) FROM categorias c
RIGHT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/*crear vistas */
CREATE VIEW entradas_con_nombre AS
SELECT c.nombre,COUNT(e.id) FROM categorias c
RIGHT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/* como se ejecuta */
SELECT * FROM entradas_con_nombres;

