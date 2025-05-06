function imprimirnome(obj){
    //throw new Error ('....')
    throw {
        name: erro.name,
        msg: erro.message,
        date: new Date
    }
    try {

        console.log(obj.name.toUpperCase() + '!!!')
    } catch (e){
        tratarerro(e)
    }
}

const obj = { name: 'Roberto'}
imprimirnome(obj)