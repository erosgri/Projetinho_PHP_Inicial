-- Criando a tabela Estado

CREATE TABLE estados (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    sigla VARCHAR(2),
    regiao ENUM('Norte', 'Nordeste', 'Centro-oeste', 'Sul', 'Sudeste') NOT NULL,
    populacao DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (nome),
    UNIQUE KEY (sigla)

    
);

