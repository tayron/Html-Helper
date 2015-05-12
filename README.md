# Html-Helper
Classes para geração de Elementos Html, como input text, form, div

Exemplo de utilização das classes
```
#!php
// Criando o input para o campo nome
$configNome['name']        = 'name';
$configNome['id']          = 'name';
$configNome['label']       = 'Nome: ';
$configNome['placeholder'] = 'Ex.: Pedro ';
$inputNome = new InputText($configNome);
 
// Criando o input para o campo telefone
$configTelefone['name']     = 'telephone';
$configTelefone['id']       = 'telephone';
$configTelefone['label']    = 'Telefone: ';
$inputTelefone = new InputText($configTelefone);
 
// Criando o Formulario e adicionando os campos
$configForm['method']   = 'post';
$configForm['name']     = 'FormCadastroUsuario';
$configForm['id']       = 'FormCadastroUsuario';
$configForm['action']   = 'index.php';
 
$Form = new Form( $configForm );
$Form->addElement( new Div( $inputNome ) );
$Form->addElement( new Div( $inputTelefone ) );
$Form->display( 'Salvar' );
```
Resultado
```
<form action="index.php" id="FormCadastroUsuario" name="FormCadastroUsuario" method="post">
    <div>
        <label for="name">Nome: </label>
        <input type="text" placeholder="Ex.: Pedro " id="name" name="name">
    </div>
    <div>
        <label for="telephone">Telefone: </label>
        <input type="text" id="telephone" name="telephone">
    </div>
    <button>Salvar</button>
</form>
```
