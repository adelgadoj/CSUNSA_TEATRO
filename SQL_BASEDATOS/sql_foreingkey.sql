ALTER TABLE persona_telefono ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE patrocinador ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE ponente ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE empleado ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE cliente ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);

ALTER TABLE personal ADD FOREIGN KEY (id_persona) REFERENCES empleado (id_persona);
ALTER TABLE director_teatro ADD FOREIGN KEY (id_persona) REFERENCES empleado (id_persona);
ALTER TABLE actor ADD FOREIGN KEY (id_persona) REFERENCES empleado (id_persona);
ALTER TABLE profesor ADD FOREIGN KEY (id_persona) REFERENCES empleado (id_persona);

ALTER TABLE taller ADD FOREIGN KEY (id_profesor) REFERENCES profesor (id_persona);
ALTER TABLE cliente_taller ADD FOREIGN KEY (id_taller) REFERENCES taller (id_taller);
ALTER TABLE cliente_taller ADD FOREIGN KEY (id_persona) REFERENCES cliente (id_persona);

ALTER TABLE utileria ADD FOREIGN KEY (id_evento) REFERENCES evento (id_evento);
ALTER TABLE patrocinios ADD FOREIGN KEY (id_evento) REFERENCES evento (id_evento);
ALTER TABLE patrocinios ADD FOREIGN KEY (id_persona) REFERENCES patrocinador (id_persona);
ALTER TABLE conferencia ADD FOREIGN KEY (id_evento) REFERENCES evento (id_evento);
ALTER TABLE conferencia ADD FOREIGN KEY (id_ponente) REFERENCES ponente (id_persona);
ALTER TABLE pelicula ADD FOREIGN KEY (id_evento) REFERENCES evento (id_evento);
ALTER TABLE obra ADD FOREIGN KEY (id_evento) REFERENCES evento (id_evento);
ALTER TABLE obra ADD FOREIGN KEY (id_director) REFERENCES director_teatro (id_persona);
ALTER TABLE actor_obra ADD FOREIGN KEY (id_evento) REFERENCES obra (id_evento);
ALTER TABLE actor_obra ADD FOREIGN KEY (id_persona) REFERENCES actor (id_persona);

ALTER TABLE entrada ADD FOREIGN KEY (id_cliente) REFERENCES cliente (id_persona);
ALTER TABLE entrada ADD FOREIGN KEY (id_evento) REFERENCES evento (id_evento);
ALTER TABLE evento ADD FOREIGN KEY (id_sala) REFERENCES sala (id_sala);
ALTER TABLE butaca ADD FOREIGN KEY (id_sala) REFERENCES sala (id_sala);