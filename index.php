<?php

require_once 'autoload.php';

$inputs    = array();
$textareas = array();
$buttons   = array();

$input = new MERLODEV\Forms\AddForm\Input();
$textarea = new MERLODEV\Forms\AddForm\TextArea();
$button = new MERLODEV\Forms\AddForm\Button();

$inputs[] = $input->addInput('name', 'name', 'text', 'Informe o seu nome!', '', 'Nome:');
$inputs[] = $input->addInput('pass', 'pass', 'password', 'Informe a sua senha!', '', 'Senha:');

$textareas[] = $textarea->addTextArea('Assunto', 'Assunto', '29', '5', 'Digite sua mensagem', '');

$inputs[] = $input->addInput('pass', 'pass', 'checkbox', '', 'Receber newsletter');

$buttons[] = $button->addButton('enviar', 'enviar', 'submit', 'Enviar');

$campos = array_merge($inputs, $textareas, $buttons);

$form = new MERLODEV\Forms\Form('index.php', 'post');
$form->render($campos);
