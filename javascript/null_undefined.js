const a = {name: 'teste'}

const b = a

console.log(b)
b.name = 'eros'

console.log(a)

let c = 3;
let d = c;

d++;

console.log(c)
//underfined
let valor
console.log(valor)
//console.log(valor1)nao foi declarado erro is not defined
valor=null //null = ausência de valor
console.log(valor)
//console.log(valor.toString())//erro
const produto = {}
console.log(produto.preco)//pelo preço nao estar definido ele da um undefined
console.log(produto)
produto.preco = 3.5
console.log(produto)
produto.preco = undefined//evitar atribuir
console.log(!!produto.preco)
console.log(produto)

produto.preco = null //sem preço

console.log(!!produto.preco)
console.log(produto)

