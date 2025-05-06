//armazenar uma função em uma variável

const soma = function(a,b) {
    console.log(a+b)
}

soma(2,3)

//armazenando uma função arrow em uma variável

const soma1 = (a,b) => {
    return a+b
}

console.log(soma1(2,3))

//retorno implicito
const subtracao = (a,b) => a - b
console.log(subtracao(2,3))

const imprimir = a => console.log(a)
imprimir('Eros')


