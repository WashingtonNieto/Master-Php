# INSERT PARA CATEGORIAS
INSERT INTO categorias VALUES(null, 'Accion');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

#INSERT ENTRADAS 
INSERT INTO entradas VALUES(null, 1,1,'Novedades GTA 5','Review GTA 5',CURDATE());
INSERT INTO entradas VALUES(null, 1,2,'LOL','Review LOL',CURDATE());
INSERT INTO entradas VALUES(null, 1,3,'FIFA','FIFA 2019',CURDATE());

INSERT INTO entradas VALUES(null, 2,1,'Assasin','Update',CURDATE());
INSERT INTO entradas VALUES(null, 2,2,'wow','Review LOL',CURDATE());
INSERT INTO entradas VALUES(null, 2,3,'pes 19','FIFA 2019',CURDATE());

INSERT INTO entradas VALUES(null, 3,1,'Call of duty','Review GTA 5',CURDATE());
INSERT INTO entradas VALUES(null, 3,1,'Fornite','Carmen SanDiego',CURDATE());
INSERT INTO entradas VALUES(null, 3,3,'Formula','Juego 2020',CURDATE());


INSERT INTO fabricantes VALUES(null, 'frubanas1','3013013456','frubana1@f.com','calle xx #10 -32','frubana1');
INSERT INTO fabricantes VALUES(null, 'frubanas2','3013013457','frubana2@f.com','calle yy #10 -32','frubana2');
INSERT INTO fabricantes VALUES(null, 'frubanas3','3013013453','frubana3@f.com','calle zz #10 -32','frubana3');

INSERT INTO productos VALUES(null, 2,'product1','{"etiqueta":"p1","creacion":"today"}','product1.png',1000,'kg');
INSERT INTO productos VALUES(null, 3,'product3','{"etiqueta":"p2","creacion":"today"}','product3.png',700,'gr');
INSERT INTO productos VALUES(null, 2,'product2','{"etiqueta":"p3","creacion":"yesterday"}','product2.png',3700,'und');
INSERT INTO productos VALUES(null, 1,'product6','{"etiqueta":"p3","creacion":"yesterday"}','product6.png',1060,'kg');
INSERT INTO productos VALUES(null, 2,'product7','{"etiqueta":"p3","creacion":"yesterday"}','product7.png',3650,'kg');


select AVG(PRICE) from productos where maker_id=3

select * from fabricantes where substring(name,1,7)='frubana';