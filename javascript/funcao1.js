//Função sem retorno

function soma(a, b){//toda funcao precisa de um bloco
    console.log(a + b)
}

soma(2 , 3)
soma(3)

//Função com retorno
function soma1(a, b = 0){
    return a+b
}

console.log(soma1())
