CREATE DATABASE teatro;
use teatro;

CREATE TABLE persona(
	id_persona INTEGER PRIMARY KEY,
    nombres VARCHAR(50),
	p_apel VARCHAR(50),
	s_apel VARCHAR(50),
    email VARCHAR(50),
    genero VARCHAR(5),
    DNI INTEGER
);
CREATE TABLE persona_telefono(
	id_persona INTEGER,
    telefono INTEGER,
    PRIMARY KEY(id_persona,telefono)
);
CREATE TABLE patrocinador(
	id_persona INTEGER PRIMARY KEY,
    empresa VARCHAR(200)
);
CREATE TABLE ponente(
	id_persona INTEGER PRIMARY KEY,
	especialidad VARCHAR(200)
);
CREATE TABLE cliente(
	id_persona INTEGER PRIMARY KEY,
    f_nac DATE,
    usuario VARCHAR(100),
    clave VARCHAR(100)
);
CREATE TABLE cliente_taller(
	id_persona INTEGER,
	id_taller INTEGER,
    PRIMARY KEY(id_persona,id_taller)
);
CREATE TABLE taller(
	id_taller INTEGER PRIMARY KEY,
    tema VARCHAR(200),
    F_inicio DATE,
    F_fin DATE,
    costo INTEGER,
    id_profesor INTEGER,
    descripcion VARCHAR(1000)
);

CREATE TABLE empleado(
	id_persona INTEGER PRIMARY KEY,
    f_nac DATE,
    salario INTEGER,
	direccion VARCHAR(200)
);

CREATE TABLE personal(
	id_persona INTEGER PRIMARY KEY,
    area VARCHAR(300),
    cargo VARCHAR(300)
);

CREATE TABLE director_teatro(
	id_persona INTEGER PRIMARY KEY,
    formacion_academica VARCHAR(300)
);

CREATE TABLE actor(
	id_persona INTEGER PRIMARY KEY,
    formacion_actoral VARCHAR(300)
);

CREATE TABLE actor_obra(
	id_evento INTEGER,
	id_persona INTEGER,
    PRIMARY KEY (id_evento,id_persona)
);

CREATE TABLE profesor(
	id_persona INTEGER PRIMARY KEY,
    especialidad VARCHAR(300)
);

CREATE TABLE evento(
	id_evento INTEGER PRIMARY KEY,
    titulo VARCHAR(300),
    fecha DATE,
    hora TIME,
    costo INTEGER,
    id_sala INTEGER
);

CREATE TABLE conferencia(
	id_evento INTEGER PRIMARY KEY,
    descripcion VARCHAR(300),
	id_ponente INTEGER
);

CREATE TABLE pelicula(
	id_evento INTEGER PRIMARY KEY,
    genero VARCHAR(100),
	a_estreno INTEGER,
    duracion TIME,
	n_director VARCHAR(300),
    sinopsis VARCHAR(2000),
    nombre_img VARCHAR(200),
    ruta_img VARCHAR(200)
);

CREATE TABLE obra(
	id_evento INTEGER PRIMARY KEY,
    genero VARCHAR(100),
    sinopsis VARCHAR(2000),
    id_director INTEGER,
    nombre_img VARCHAR(200),
    ruta_img VARCHAR(200)
);

CREATE TABLE sala(
	id_sala INTEGER PRIMARY KEY,
    aforo INTEGER
);

CREATE TABLE butaca(
	id_sala INTEGER,
	id_butaca VARCHAR(4),
    PRIMARY KEY(id_sala,id_butaca)
);

CREATE TABLE patrocinios(
	id_evento INTEGER,
    id_persona INTEGER,
    monto INTEGER,
    PRIMARY KEY(id_evento,id_persona)
);

CREATE TABLE utileria(
	id_utileria INTEGER PRIMARY KEY,
    nombre VARCHAR(200),
    F_registro DATE,
    area VARCHAR(100),
    id_evento INTEGER
);

CREATE TABLE entrada(
	id_entrada INTEGER PRIMARY KEY,
	id_cliente INTEGER,
    id_evento INTEGER,
    forma_pago VARCHAR(100)
);
