<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php 
if(count($_POST) > 0) {
    $erros = [];

    // isset($_POST['nome'])
    if(!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if(filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y', $_POST['nascimento']);
        if(!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }

    if (!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT,
        $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20).';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'],
        FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido';
    }
}
?>



<form action="#" method="post">
        <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" id= "name" 
                            name ="nome" placeholder = "nome">
                                        
                </div>

                <div class="form-group col-md-3">
                    <label for="data_de_nascimento">Data de Nascimento</label>
                    <input type="text" class="form-control"
                             id="nascimento" name ="data de nascimento " placeholder = "data de nascimento">
                            
                </div>
                <div class="form-group col-md-3">
                    <label for="qtde. filhos">Quantidade de filhos</label>
                    <input type="text" class="form-control"
                             id= "qtde_filhos" name ="qtde_filhos " placeholder = "Qtde_filhos">
                            
                </div>
                <div class="form-group col-md-3">
                    <label for="salario">Salário</label>
                    <input type="text" class="form-control"
                             id= "salario" name ="salario" placeholder = "salario">
                            
                </div>

                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control"
                             id= "email" name ="email" placeholder = "E-mail">
                            
                </div>
                <div class="form-group col-md-6">
                    <label for="site">Site</label>
                    <input type="text" class="form-control"
                             id= "site" name ="site " placeholder = "Site">
                            
                </div>
                 
        <div>  
        
    </div>
        

   <button class="btn-primary btn-lg">Enviar</button>

</form>

<style>
    h4{
        font-size: 1.8rem;
        Text-decoration: underline black;
        
    }

</style>