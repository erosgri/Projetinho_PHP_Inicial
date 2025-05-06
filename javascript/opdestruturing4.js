function rand([min = 0 , max = 1000]){
    if (min > max) [min, max] = [max, min]//se o minimo for maior que o maximo inverta
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)

}
console.log(rand([50,40]))
console.log(rand([440]))
console.log(rand([,490]))
console.log(rand())//nao da pra ler assim

