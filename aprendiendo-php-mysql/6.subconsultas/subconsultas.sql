/* 
subconsultas
 */

- quiero los usuarios que tengan entradas creadas
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

-- sacar los uusuarios que tengan alguna entrada que en su titulo hable de FIFA

SELECT nombre, apellidoS from Usuarios
WHERE id IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE "%FIFA%");

--Sacar todas las entradas de la categoria accion, utilizando su nombre
SELECT en.id,en.usuario_id,ca.nombre, en.titulo  FROM entradas as en, categorias as ca
WHERE categoria_id = ca.id AND ca.nombre='accion';
-- otra forma
SELECT titulo FROM entradas WHERE categoria_id
    IN(SELECT id FROM categorias WHERE nombre='Accion');

--Mostrar las categorias con mas de 3 entradas
SELECT id,nombre FROM categorias WHERE id
    IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>2);


--Mostras los usuarios que crearon un martes
SELECT nombre, apellidos, dayofweek(fecha) FROM usuarios;

--Mostrar el nombre del usuario que tenga mas entradas

--Mostrar las categorias sin entradas

