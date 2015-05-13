<?php

function __autoload($classe) {
    include_once 'Html/' . $classe . '.php';
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