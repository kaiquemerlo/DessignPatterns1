<?php

require_once 'autoload.php';

$input    = new MERLODEV\Forms\AddForm\Input();
$textarea = new MERLODEV\Forms\AddForm\TextArea();
$button   = new MERLODEV\Forms\AddForm\Button();

$input->setId('nome')
            ->setName('nome')
            ->setType('text')
            ->setTitle('Nome:');
$input1 = $input->addInput();
$input->setId('pass')
    ->setName('pass')
    ->setType('password')
    ->setTitle('Senha:');
$input2 = $input->addInput();

$textarea->setId('mensagem')
                ->setName('mensagem')
                ->setCols(29)
                ->setRows(5)
                ->setPlaceholder('Digite sua mensagem');
$textarea1 = $textarea->addTextArea();

$input->setId('news')
        ->setName('news')
        ->setType('checkbox')
        ->setTitle('')
        ->setLabel('Receber newsletter');
$input3 = $input->addInput();

$button->setId('enviar')
        ->setName('enviar')
        ->setValue('Enviar')
        ->setType('submit');
$button1 = $button->addButton();

$form = new MERLODEV\Forms\Form('index.php', 'post');
$form->addCampo($input1);
$form->addCampo($input2);
$form->addCampo($input3);
$form->addCampo($textarea1);
$form->addCampo($button1);
$form->render();

