/* 
 Agrupamiento
 */

SELECT titulo FROM  entradas;

SELECT titulo from entradas GROUP BY categoria_id;

SELECT titulo, categoria_id from entradas GROUP BY categoria_id;

SELECT COUNT(titulo) as "numero de entradas", categoria_id FROM entradas GROUP BY categoria_id;
-- si quiero hacer una condicion dentro de una consulta de agrupamiento, no la
-- puedo hacer con un where... porque va necesitar trabajar con cada fila, cosa
-- que el group by ya lo restringio...
-- Para colocar una condicion en una consulta de agrupamiento se utiliza HAVING

SELECT COUNT(titulo) as "numero de entradas", categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo)>2;
--Funciones para agrupamientos
-- AVG     sacar la media
-- COUNT   Contar el numero de elementos
-- MAX     El valor maximo de un grupo
-- MIN     El valor minumo de un grupo
-- SUM     la sumatoria del contenido del grupo


