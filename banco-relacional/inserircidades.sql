SELECT * FROM estados

INSERT INTO cidades (nome, area, estado_id)
VALUES ('Campinas', 795, 15)

INSERT INTO cidades (nome, area, estado_id)
VALUES ('Niteroi', 133.9,56)

INSERT INTO cidades (nome, area, estado_id)
VALUES ('Caruaru', 920.6,(SELECT id from estados WHERE sigla = 'PE'))

INSERT INTO cidades (nome, area, estado_id)
VALUES('Juazeiro do Norte', 248.2,(select id FROM estados WHERE sigla = 'CE'))

DELETE from cidades
WHERE id =43

INSERT INTO cidades (nome, area, estado_id)
VALUES('Florianopolis', 148.2,(select id FROM estados WHERE sigla = 'SC'))

SELECT * FROM cidades

DELETE from cidades
WHERE id = 4

DELETE from cidades
WHERE id = 7



