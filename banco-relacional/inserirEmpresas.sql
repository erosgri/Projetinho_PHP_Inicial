
ALTER Table empresas MODIFY cnpj VARCHAR(25);

INSERT into empresas (nome, cnpj)
VALUES
    ('Bradesco', 95878756612),
    ('Vale', 25896144978),
    ('Cielo', 74132568922);

DESC empresas

SELECT * FROM empresas;

SELECT * FROM cidades;

INSERT INTO empresas_unidades
    (empresa_id, cidade_id, sede)
VALUES
    (1,1,1),
    (1,2,0),
    (3,6,1),
    (3,3,0);