DROP SCHEMA IF EXISTS `asistencia`;
CREATE SCHEMA IF  NOT EXISTS `asistencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `asistencia`;

CREATE TABLE `usuarios`(
    `nombre` text not null,
    `direccion` text not null,
    `telefono` varchar(15) not null,
    `correo` text not null,
    `nombre_usuario`text not null,
    `password` varchar(25) not null,
    `fecha_registro` datetime not null default current_timestamp on update current_timestamp,
    `persmisos` int (11) not null DEFAULT '1',
    `id` int(11) not null auto_increment,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `usuarios` VALUES ('Jose Antonio Diaz Hernandez','Hidalgo no 16','55362198295','joseantonio@aragon.unam.mx','Toño','654321','2023-08-12 17:20:57',1,1);
INSERT INTO `usuarios` VALUES ('Maria Guadalupe Gomez Lopez','Juarez no 25','56851312','maria@gmailcom','Lupita','987654','2023-10-08 12:30:57',1,2);
INSERT INTO `usuarios` VALUES ('Pedro Perez Gonzalez','Venustiano Carranza','556515','pedro@aragon.unam.mx','PedroBro','123456','2023-12-12 12:00:57',1,3);