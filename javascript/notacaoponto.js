console.log(Math.ceil(6.3))//arredondar pracima
const obj1 = {}
obj1.nome = 'Bola'
console.log(obj1.nome)

function obj(nome) {//para criar um atributo publico
    this.nome = nome
    this.exec = function(){
        console.log('Executar...')
    }
}

const obj2 = new obj('cadeira')
const obj3 = new obj('mesa')
console.log(obj2.nome)
console.log(obj3.nome)
obj3.exec()