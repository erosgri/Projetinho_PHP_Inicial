create table if not exists empresas (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cnpj int UNSIGNED,
    PRIMARY key (id),
    UNIQUE KEY (cnpj)

);

-- cidades_empresas

CREATE Table if NOT exists empresas_unidades (
    empresa_id INT UNSIGNED NOT NULL,
    cidade_id INT UNSIGNED NOT NULL,
    sede TINYINT(1) NOT NULL,
    PRIMARY KEY(empresa_id, cidade_id)
);

