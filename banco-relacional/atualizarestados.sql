update estados
SET nome = 'Maranhão'
where sigla = 'MA'

UPDATE estados
SET nome = 'Paraná' , populacao = 11.32
WHERE sigla = 'PR'

UPDATE estados
set nome = 'São Paulo', populacao = 45.8
where sigla = 'SP'

SELECT nome, populacao from estados
where populacao >=10 

select est.sigla, nome, regiao FROM estados est 
