function novoElemento(tagName, className){
    const elem = document.createElement(tagName)
    elem.className = className
    return elem
}

function Barreira (reversa = false){
    this.elemento = novoElemento('div', 'barreira')

    const borda = novoElemento('div', 'borda')
    const corpo = novoElemento('div', 'corpo')
    this.elemento.appendChild(reversa ? corpo : borda)
    this.elemento.appendChild(reversa ? borda : corpo)

    this.setAltura = altura => corpo.style.height = `${altura}px`

}

//const b = new Barreira(true)
//b.setAltura(150)
//document.querySelector('[wm-flappy]').appendChild(b.elemento)

function ParDeBarreiras(altura, abertura, x){
    this.elemento = novoElemento('div', 'par-de-barreiras')

    this.superior = new Barreira(true)
    this.inferior = new Barreira(false)

    this.elemento.appendChild(this.superior.elemento)
    this.elemento.appendChild(this.inferior.elemento)

    this.sortearAbertura = () =>{
        const alturaSuperior = Math.random() * (altura - abertura)
        const alturaInferior = altura - abertura - alturaSuperior
        this.superior.setAltura(alturaSuperior)
        this.inferior.setAltura(alturaInferior)
    }

    this.getX = () => parseInt(this.elemento.style.left.split('px')[0])
    this.setX = x => this.elemento.style.left = `${x}px`
    this.getLargura = () => this.elemento.clientWidth
    this.sortearAbertura()
    this.setX(x)
}
//.........................altura abertura posição
//const b = new ParDeBarreiras(700,370,800)
//document.querySelector('[wm-flappy]').appendChild(b.elemento)

function Barreiras(altura, largura, abertura, espaco, notificarPonto){
    this.pares = [
        new ParDeBarreiras(altura, abertura, largura),
        new ParDeBarreiras(altura, abertura, largura + espaco),
        new ParDeBarreiras(altura, abertura, largura + espaco * 2),
        new ParDeBarreiras(altura, abertura, largura + espaco * 3),

    ]

    const deslocamento = 3
    this.animar = () => {
        this.pares.forEach(par =>{
            par.setX(par.getX() - deslocamento)

            //quando o elemento sair da tela
            if (par.getX() < -par.getLargura()){
                par.setX(par.getX() + espaco * this.pares.length)
                par.sortearAbertura()
            }
            const meio = largura / 2
            const cruzouMeio = par.getX() + deslocamento >= meio
                                && par.getX() < meio
                               if (cruzouMeio) notificarPonto()
        })
    }
}

function CaduTrex(alturaJogo){
    let voando = false

    this.elemento = novoElemento('img' , 'cadu')
    this.elemento.src = 'imgs/cadu.png'
    this.getY = () => parseInt(this.elemento.style.bottom.split('px')[0]) || 0
    this.setY = y => this.elemento.style.bottom = `${y}px`

    window.onkeydown = e => voando = true
    window.onkeyup = e => voando = false
    this.animar = () => {
        const novoY = this.getY() + (voando ? 8 : -5)
        const alturaMaxima = alturaJogo - this.elemento.clientHeight

        if(novoY <= 0){
            this.setY(0)
        }else if(novoY >= alturaMaxima){
            this.setY(alturaMaxima)
        }else{
            this.setY(novoY)
        }
    }
    this.setY(alturaJogo / 2)
}


//const barreiras = new Barreiras(700, 1200, 450, 400)
//const cadu = new Cadu(700)
//const areaDoJogo = document.querySelector('[wm-flappy]')


function Progresso() {
    this.elemento = novoElemento('span' , 'progresso')
    this.atualizarPontos = pontos => {
        this.elemento.innerHTML = pontos
    }
    this.atualizarPontos(0)
}


//areaDoJogo.appendChild(cadu.elemento)
//areaDoJogo.appendChild(new Progresso().elemento)
//barreiras.pares.forEach(par => areaDoJogo.appendChild(par.elemento))
//setInterval(() => {
  //  barreiras.animar()
   // cadu.animar()

//}, 20)

function estaoSobrepostos(elementoA, elementoB){

    const a = elementoA.getBoundingClientRect()
    const b = elementoB.getBoundingClientRect()

    const horizontal = a.left + a.width >= b.left
                       && b.left + b.width >=a.left
                       
    const vertical = a.top + a.height >= b.top
                     && b.top + b.height >= a.top 
    return horizontal && vertical  
}

//function colidir(cadu , barreiras){
    
  //  let colidiu = false
    //barreiras.pares.forEach(ParDeBarreiras => {
      //  if(!colidiu) {
        //    const superior = ParDeBarreiras.superior.elemento
          //  const inferior = ParDeBarreiras.inferior.elemento
            //colidiu = estaoSobrepostos(cadu.elemento, superior)
              //     || estaoSobrepostos(cadu.elemento, inferior)  
        //}
        
    //})
    //return colidiu
//}

function Cadu2(){
    let pontos = 0

    const areaDoJogo = document.querySelector('[wm-flappy]')
    const altura = areaDoJogo.clientHeight
    const largura = areaDoJogo.clientWidth

    const progresso = new Progresso()
    const barreiras = new Barreiras(altura, largura, 300, 400,
                    () => progresso.atualizarPontos(++pontos))
    const cadu = new CaduTrex(altura)

    areaDoJogo.appendChild(progresso.elemento)
    areaDoJogo.appendChild(cadu.elemento)
    barreiras.pares.forEach(par => areaDoJogo.appendChild(par.elemento))

    this.start = () => {
        //loop do game
        const temporizador = setInterval(() => {
            barreiras.animar()
            cadu.animar()
        
        if(colidir(cadu, barreiras)){
            clearInterval(temporizador)
        }

        },20)
    }
    
}
new Cadu2().start()
