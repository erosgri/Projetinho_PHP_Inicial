function rand({min = 0, max = 100}){
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}

const obj = {max: 50 , min: 40}
console.log(rand(obj))
console.log(rand({min: 655}))