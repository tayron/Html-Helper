# Html-Helper
Classes para geração de Elementos Html, como input text, form, div

Exemplo de utilização das classes
```
#!php
    function __autoload($classe){
        include_once 'Html/' . $classe.'.php';
    }

    $nomeCompleto = new InputText(['id' => 'nome', 'name' => 'nome', 'type' => 'text', 'label' => 'Nome Completo:']);
    $telefone = new InputText(['id' => 'telefone', 'name' => 'telefone', 'type' => 'phone', 'label' => 'Telefone:']);
    $email = new InputText(['id' => 'email', 'name' => 'email', 'type' => 'email', 'label' => 'Email:']);
    $mensagem = new Textarea(['id' => 'mensagem', 'name' => 'menagem', 'label' => 'Mensagem:']);

    $divNome = new Div($nomeCompleto, ['style' => 'display: block; padding: 5px']);
    $divTelefone = new Div($telefone, ['style' => 'display: block; padding: 5px']);
    $divEmail = new Div($telefone, ['style' => 'display: block; padding: 5px']);
    $divMensagem = new Div($mensagem, ['style' => 'display: block; padding: 5px']);

    $formulario = new Form(['type' => 'post']);
    $formulario->addElement($divNome);
    $formulario->addElement($divTelefone);
    $formulario->addElement($divEmail);
    $formulario->addElement($divMensagem);
    
    echo $formulario->display('Enviar mensagem');
```
Resultado
```
<form type = "post" method = "post">
    <div style = "display: block; padding: 5px">
        <label for = "nome">Nome Completo:</label>
        <input id = "nome" type = "text" name = "nome">
    </div>
    <div style = "display: block; padding: 5px">
        <label for = "telefone">Telefone:</label>
        <input id = "telefone" type = "phone" name = "telefone">
    </div>
    <div style = "display: block; padding: 5px">
        <label for = "telefone">Telefone:</label>
        <input id = "telefone" type = "phone" name = "telefone">
    </div>
    <div style = "display: block; padding: 5px">
        <label for = "menagem">Mensagem:</label>
        <textarea id = "mensagem" name = "menagem"></textarea>
    </div>
    <button>Enviar mensagem</button>
</form>
```
