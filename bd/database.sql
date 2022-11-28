DROP DATABASE IF EXISTS CasaMiau;
CREATE DATABASE IF NOT EXISTS CasaMiau;

USE CasaMiau;

CREATE TABLE gato(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    edad ENUM('cachorro','adulto') NOT NULL,
    nacimiento YEAR(4) NOT NULL,
    raza VARCHAR(80),
    sexo ENUM('macho','hembra') NOT NULL,
    caracter VARCHAR(80) NOT NULL,
    plot VARCHAR(300)
    );
CREATE TABLE usuario_adoptor(
    email VARCHAR(120) PRIMARY KEY,
    telefono VARCHAR(50) NOT NULL,
    motivo VARCHAR(244) NOT NULL
);
CREATE TABLE usuario_apoyador(
    email VARCHAR(120) PRIMARY KEY,
    nombre VARCHAR(60) NOT NULL,
    plot VARCHAR(300) NOT NULL
);

INSERT INTO gato (id, nombre,edad,nacimiento,raza,sexo,caracter,plot) VALUES
	(101, 'Kiara','adulto',2021-11,'comun europeo','hembra','jugetona','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Shivaweb.jpg'), 
	(102, 'Andi','adulto',2021-08,'comun','hembra','miedosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Zarzaweb.jpg'), 
	(103, 'Mayra','adulto',2021-09,'comun europeo','hembra','cariñosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Changrotweb.jpg'), 
	(104, 'Kyn yon','adulto',2021-11,'comun','hembra','miedosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-PitahPompitaweb.jpg'), 
	(105, 'Fer','adulto',2021-10,'comun europeo','hembra','miedosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Moseyweb.jpg'),
    (107, 'Marcos','cachorro',2022-04,'comun europeo','macho','miedoso','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Maskraweb.jpg'),
    (108, 'Fabian','cachorro',2022-03,'comun','macho','simpatico','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Enecoweb.jpg'),
    (109, 'Pier','cachorro',2022-04,'comun europeo','macho','simpatico','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Belcebuweb.jpg'),
    (110, 'Goku','cachorro',2022-03,'comun','macho','jugeton','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Micaweb.jpg'),
    (121, 'Kaela','adulto',2021-11,'comun europeo','hembra','activa y jugetona','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Bentuweb.jpg'), 
	(122, 'Amil','adulto',2021-08,'comun','hembra','miedosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-LuckyyLookweb.jpg'), 
	(123, 'Amenis','adulto',2021-09,'comun europeo','hembra','cariñosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Emilyweb.jpg'), 
	(124, 'Juanis','adulto',2021-11,'comun','hembra','miedosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Vitaweb_1.jpg'), 
	(125, 'Pedali','adulto',2021-10,'comun europeo','hembra','miedosa','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Chapmanweb.jpg'),
    (127, 'Master','cachorro',2022-04,'comun europeo','macho','miedoso','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Arubaweb.jpg'),
    (128, 'Vegete','cachorro',2022-03,'comun','macho','simpatico','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Danversweb.jpg'),
    (129, 'Goofy','cachorro',2022-04,'comun europeo','macho','simpatico','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Danversweb.jpg'),
    (130, 'Naruto','cachorro',2022-03,'comun','macho','activo y jugeton','https://elrefugio.org/contenido/animales/thumbsFicha/El-Refugio-Jibblesweb.jpg');

INSERT INTO usuario_apoyador (email,nombre,plot) VALUES
    ('juanto@gmail.com','Juan Quispe','https://omniaestudio.es/wp-content/uploads/2020/10/Zara-Logo-300x169.png'),
    ('americo@gmail.com','Fran Katar','https://omniaestudio.es/wp-content/uploads/2020/10/adidas-logo-300x169.png'),
    ('equisde@gmail.com','Marc Paredes','https://omniaestudio.es/wp-content/uploads/2020/10/Converse-Logotipo-2017-Presente-300x169.png'),
    ('Jugando@gmail.com','Sergio Bernando','https://omniaestudio.es/wp-content/uploads/2020/10/yves-logo-300x225.png'),
    ('mentalizando@gmail.com','Albedo Montañes','https://omniaestudio.es/wp-content/uploads/2020/10/desigual-logo-300x300.png'),
    ('ventasgoo@gmail.com','Americo Geronimo','https://omniaestudio.es/wp-content/uploads/2020/10/starbucks-logo-296x300.png');

INSERT INTO usuario_adoptor (email,telefono,motivo) VALUES
    ('marco@gmail.com','98784','Me gustan los gatitos y quisiera cuidar de uno'),
    ('almenda@gmail.com','87451','Hace mucho que no tengo uno, y quisiera uno para amarlo'),
    ('padtricia@gmail.com','17895','Quiero tener alguien que cuidar'),
    ('julendes@gmail.com','45656','Me encantan los gatitos, y justo ahora necesito uno'),
    ('penedal@gmail.com','8745645','Quisiera que me den la posibilidad de que me den alguno'),
    ('cuadra@gmail.com','456546','Quiero tener alguien que cuidar y amar'),
    ('pedrito@gmail.com','45679','Los gatitos son hermosos, y quiero cuidar de uno');



