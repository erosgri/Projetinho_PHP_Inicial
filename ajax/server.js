const bodyParser = require('body-parser')
const express = require('express')
const app = express()



app.use(express.static('.'))
app.use(bodyParser.urlencoded({ extended: true }))
app.use(bodyParser.json())

//app.get('/teste', (req,res) => res.send('vai dar certo '))
const multer = require('multer')
const storage = multer.diskStorage({
    destination: function(req, file, callback){
        callback(null, './upload')
    },
    filename: function(req, file, callback){
        callback(null, `${Date.now()}_${file.originalname}`)
    }
})

const upload = multer({ storage }).single('arquivo')
app.post('/upload', (req, res) =>{
    upload(req, res, err => {
        if (err) {
            return res.end('Ocorreu um Erro')
        }
        res.end('Concluido com Sucesso')
    })
})
app.get('/upload', (req, res) => {
    res.send('Rota de upload ativa. Use POST para enviar arquivos.');
})

app.post('/formulario', (req, res) =>{
    res.send({
        ...req.body,
        id: 1
    })
})

// app.post('/formulario', (req, res) => {
//    res.json({
//        nome: req.body.nome,
//        sobrenome: req.body.sobrenome,
//         mensagem: 'Dados recebidos com sucesso!'
//     })
// })

// app.get('/formulario', (req, res) => {
//    res.send('Rota de upload ativa. Use POST para enviar arquivos.');
// })

app.get('/parOuImpar' , (req, res) =>{
    const par = parseInt(req.query.numero) % 2 === 0
    res.send({
        resultado: par ? 'Par' : 'Impar'
    })
})


app.listen(8081, () => console.log('executando...'))




