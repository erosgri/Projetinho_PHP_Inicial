SELECT
    regiao as 'Região',
    sum(populacao) as Total
from estados
GROUP BY regiao
ORDER BY Total DESC

SELECT
    sum(populacao) as Total
from estados

SELECT
    AVG(populacao) as Total
from estados

SELECT
    regiao as 'Região',
    sum(populacao) as Total
from estados
GROUP BY regiao
ORDER BY Total DESC

SELECT regiao, SUM(populacao) AS total
FROM estados
WHERE regiao = 'Norte'
GROUP BY regiao

UNION

SELECT regiao, SUM(populacao) AS total
FROM estados
WHERE regiao = 'Nordeste'
GROUP BY regiao;


SELECT
    'Norte e Nordeste' AS regiao,
    SUM(populacao) AS total
FROM estados
WHERE regiao IN ('Norte', 'Nordeste');

