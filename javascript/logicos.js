function compras(trabalho1 , trabalho2){
    const comprarsorvete = trabalho1 || trabalho2
    const comprartv50 = trabalho1 && trabalho2
    //const comprar32 = !!(trabalho1 ^ trabalho2)
    const comprar32 = trabalho1 != trabalho2
    const saudavel = !comprarsorvete
    return {comprarsorvete, comprar32, comprartv50, saudavel}
}

console.log(compras(false,false))

