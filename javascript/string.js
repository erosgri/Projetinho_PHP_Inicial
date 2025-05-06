const escola = "Universidade federal de uberlandia";
console.log(escola.charAt(1));//saber o caracter referente a posição
console.log(escola.charCodeAt(1));//tabela ascII
console.log(escola.indexOf('n'))//posição na string
console.log(escola.substring(3))//ele vai ler a partir da posição 3
console.log(escola.substring(0, 13))//ele vai ler a partir da posição 3
console.log('Faculdade: '.concat(escola).concat(" Conhecida como.... UFU")); //concatenação
//o sinal de + serve para concatenar tbm e string(concatenação) ganha de soma
console.log('Faculdade: '+ escola + " Conhecida como.... UFU"); 
console.log(escola.replace('Universidade' , 'Faculdade'))//trocar uma letra da posição por outra atribuição
console.log('Eros,Aline,Renata'.split(','))//transformar em array
