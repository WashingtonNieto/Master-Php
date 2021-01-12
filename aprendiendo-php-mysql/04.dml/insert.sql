#insertar registros
INSERT INTO usuarios VALUES(null, 'Washington','Nieto','washington_nieto@hotmail.com','1234','2020/11/16');
INSERT INTO usuarios VALUES(null, 'Antonio','Martinez','antonio_martinez_nieto@hotmail.com','1234','2020/11/16');
INSERT INTO usuarios VALUES(null, 'Paco','Lopez','paco_lopez@gmail.com','1234','2020/11/16');

#insertar filas con ciertas columnas
update usuarios set email ='antonio-martinez@outlook.es' WHERE id = 3;