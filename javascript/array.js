const valores = [7.7 , 2.9 , 5.5 , 9.6 , 6.5];
console.log(valores[0] , valores[3], valores[6]);

valores[6] = 12.5;
console.log(valores[0] , valores[3], valores[6]);
console.log(valores.length);
valores.push({id:3}, false, null, 'teste');
console.log(valores)

delete valores[1]
console.log(valores)
console.log(typeof valores)