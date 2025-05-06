const nome = 'Eros';
const concatenacao = 'Olá' + nome + '!';
const template = `
    olá
    ${nome}!`

console.log(template, concatenacao);
console.log(`Resolva: 1 + 1 = ${1+1}`);

const up = texto => texto.toUpperCase()
console.log(`Ei....${up('cuidado')}!`);