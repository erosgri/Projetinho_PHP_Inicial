let isAtivo = false;

console.log(isAtivo);

isAtivo = true;

console.log(isAtivo);

isAtivo = 1
console.log(!!isAtivo);//exclamação = NOT
//verdadeiros
console.log(!!3);
console.log(!!-1);
console.log(!!{});
console.log(!!Infinity);
//FALSOS
console.log(!!0);
console.log(!!'');
console.log(!!null);
console.log(!!NaN);
console.log(!!undefined);
console.log(!!(isAtivo = false));
let nome = '';
console.log(nome || 'Desconhecido');
