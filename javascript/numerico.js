const peso1 = 1.0;
const peso2 = Number('2.1');

console.log(peso1, peso2);
console.log(Number.isInteger(peso2));

const avaliacao1 = 10;
const avaliacao2 = 5;
const total = ((avaliacao1 * peso1) + (avaliacao2 * peso2)) / (peso1 + peso2);

console.log("Sua nota é:" ,total.toFixed(2));//casas decimais
console.log(typeof total);