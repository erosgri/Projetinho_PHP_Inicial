const [a] = [10]
console.log(a)

const [n1 , , n3, , n5 , n6 = 0] = [10, 7 , 9 , 8] 
console.log(n1, n3, n5 , n6)
//esta dizendo pra ignorar o primeiro elemento, ele vai pegar o segundo elemento do segundo array
const [, [,nota]] = [[,8, 7] , [9, 6, 8]]
console.log(nota)