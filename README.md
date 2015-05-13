# Html-Helper
Classes PHP criadas como base de estudo para gerar elementos Html.

Exemplo de utilização das classes
```
#!php
    function __autoload($classe){
        include_once 'Html/' . $classe.'.php';
    }

    $nomeCompleto = new InputText(['id' => 'nome', 'name' => 'nome', 'type' => 'text', 'label' => 'Nome Completo:']);
    $telefone = new InputText(['id' => 'telefone', 'name' => 'telefone', 'type' => 'text', 'label' => 'Telefone:']);
    $email = new InputText(['id' => 'email', 'name' => 'email', 'type' => 'email', 'label' => 'Email:']);
    $mensagem = new Textarea(['id' => 'mensagem', 'name' => 'menagem', 'label' => 'Mensagem:']);
    
    $divNome = new Div($nomeCompleto, ['style' => 'display: block; padding: 5px']);
    $divTelefone = new Div($telefone, ['style' => 'display: block; padding: 5px']);
    $divEmail = new Div($email, ['style' => 'display: block; padding: 5px']);
    $divMensagem = new Div($mensagem, ['style' => 'display: block; padding: 5px']);
    
    $formulario = new Form(['method' => 'post']);
    $formulario->addElement($divNome);
    $formulario->addElement($divTelefone);
    $formulario->addElement($divEmail);
    $formulario->addElement($divMensagem);
    
    echo $formulario->display('Enviar mensagem');
```
Resultado
```
<form method="post">
    <div style="display: block; padding: 5px">
        <label for="nome">Nome Completo:</label>
        <input type="text" name="nome" id="nome" />
    </div>
    <div style="display: block; padding: 5px">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" />
    </div>
    <div style="display: block; padding: 5px">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
    </div>
    <div style="display: block; padding: 5px">
        <label for="menagem">Mensagem:</label>
        <textarea name="menagem" id="mensagem" /></textarea>
    </div>
    <button>Enviar mensagem</button>
</form>
```
