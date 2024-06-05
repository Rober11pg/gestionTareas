//ED EDUCACION
//DP DESARROLLO PERSONAL
//RD RESPONSABILIDADES DOMESTICAS
//RS RELACIONES SOCIALES
//SB SALUD Y BIENSTAR
//PR DESARROLLO PROFESIONAL


CREATE DATABASE IF NOT EXISTS administradorTareas;

USE administradorTareas;

-- Crear tabla de Usuarios
CREATE TABLE IF NOT EXISTS `Usuarios`(
    `userId` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `apellido` VARCHAR(255) NOT NULL,
    `correo` VARCHAR(255) NOT NULL,
    `contrasena` VARCHAR(255) NOT NULL,
    `rol` ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    PRIMARY KEY(`userId`),
    UNIQUE (`correo`)
);

-- Crear tabla de Tareas
CREATE TABLE IF NOT EXISTS `Tareas`(
    `tareaId` INT NOT NULL AUTO_INCREMENT,
    `descripcion` TEXT NOT NULL,
    `tipoTarea` ENUM('ED','DP','RD','RS','SB','PR') NOT NULL,
    PRIMARY KEY(`tareaId`)
);

-- Crear tabla para registrar tareas completadas por cada usuario
CREATE TABLE IF NOT EXISTS `TareasUsuarios`(
    `tareaId` INT NOT NULL,
    `userId` INT NOT NULL,
    `estado` ENUM('pendiente', 'completada') NOT NULL DEFAULT 'pendiente',
    PRIMARY KEY(`tareaId`, `userId`),
    CONSTRAINT `FK_TareasUsuarios_Tareas` FOREIGN KEY(`tareaId`) REFERENCES `Tareas`(`tareaId`) ON DELETE CASCADE,
    CONSTRAINT `FK_TareasUsuarios_Usuarios` FOREIGN KEY(`userId`) REFERENCES `Usuarios`(`userId`) ON DELETE CASCADE
);
