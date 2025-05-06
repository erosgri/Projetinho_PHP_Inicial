//par nome valor

const saudacao = 'Olá'; //contexto léxico

function exec(){
    const saudacao = 'Ooopa'
    return saudacao
}
//objetos sao agrupados e alinhados
const cliente = {
    nome: 'Eros',
    peso: 90,
    endereco: {
        logradouro: 'Rua almaden',
        numero: 666,
    }
}

console.log(saudacao)
console.log(exec())
console.log(cliente)
