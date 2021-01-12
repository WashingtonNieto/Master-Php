
/**
 * Author:  washi
 * Created: 8/11/2020
 */

/* Create table*/
CREATE TABLE usuarios(
    id          int(255) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(100) not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    fecha       date not null,
    CONSTRAINT  pk_usuarios PRIMARY KEY(id),
    CONSTRAINT  u1_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE categorias(
    id      int(255) auto_increment not null,
    nombre  varchar(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
    id          int(255) auto_increment not null,
    usuario_id  int(255) not null,
    categoria_id int(255) not null,
    titulo      varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha       date not null,
    CONSTRAINT  pk_entradas PRIMARY KEY(id),
    CONSTRAINT  fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT  fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;

CREATE TABLE fabricantes(
    id          int(255) auto_increment not null,
    name        varchar(255) not null,
    telephone   varchar(255) not null,
    email       varchar(255) not null,
    address     varchar(255) not null,
    description varchar(255) not null,
    CONSTRAINT  pk_fabricantes PRIMARY KEY(id),
    CONSTRAINT  u1_email UNIQUE(email)
)ENGINE=InnoDB;

CREATE TABLE productos(
    id          int(255) auto_increment not null,
    maker_id    int(255) not null,
    name        varchar(255) not null,
    description varchar(255) not null,
    photo       varchar(255) not null,
    price       varchar(255) not null,
    unit_type   varchar(255) not null,
    CONSTRAINT  pk_productos PRIMARY KEY(id),
    CONSTRAINT  fk_maker_id FOREIGN KEY(maker_id) REFERENCES fabricantes(id)
)ENGINE=InnoDB;
