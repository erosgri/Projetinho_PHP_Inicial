const pessoa = {
    nome: 'eros',
    idade: 33,
    endereço: {
        logradouro: 'Rua santa cruz',
        numero: 202
    }
}

const { nome, idade} = pessoa //tire de dentro do objeto

console.log(nome,idade)

const{ nome: n , idade: i} = pessoa

console.log(n,i)

const {sobrenome , titulo = true} = pessoa
console.log(sobrenome , titulo)

const {endereço: {logradouro , numero}} = pessoa
console.log(logradouro, numero) //so o ultimo dado pode estar nulo ou undefined
