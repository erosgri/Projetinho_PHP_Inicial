SELECT 
    p.nome AS prefeito,
    c.nome AS cidade,
    e.nome AS estado,
    e.regiao AS regiao
FROM prefeitos p
INNER JOIN cidades c ON p.cidade_id = c.id
INNER JOIN estados e ON c.estado_id = e.id;

SELECT * FROM prefeitos

SELECT * FROM cidades c INNER join prefeitos p on c.id = p.cidade_id

SELECT * FROM cidades c LEFT join prefeitos p on c.id = p.cidade_id
UNION 
SELECT * FROM cidades c RIGHT join prefeitos p on c.id = p.cidade_id


