SELECT e.nome, c.nome, regiao from estados e, cidades c
WHERE e.id = c.estado_id;

SELECT
    c.nome AS Cidade,
    e.nome AS Estado,
    e.regiao AS Região
FROM estados e
INNER JOIN cidades c ON e.id = c.estado_id;