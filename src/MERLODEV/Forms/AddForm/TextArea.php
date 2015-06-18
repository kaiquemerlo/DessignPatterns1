<?php 
namespace MERLODEV\Forms\AddForm;
class TextArea implements \MERLODEV\Forms\IntForms\TextAreaInt{
    public function addTextArea($name, $id, $cols = null, $rows = null, $placeholder = 'Digite sua mensagem', $title = null){
        return "<strong>{$title}</strong><textarea placeholder='{$placeholder}' name='{$name}' id='{$id}' cols='{$cols}' rows='{$rows}'></textarea>";
    }
}

?> 