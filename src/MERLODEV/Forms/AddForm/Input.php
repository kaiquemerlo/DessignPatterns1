<?php 
namespace MERLODEV\Forms\AddForm;

class Input implements \MERLODEV\Forms\IntForms\InputInt{
    public function addInput($name, $id, $type, $placeholder = null, $label = null, $title = null){
        return "<strong>{$title}</strong> <input type='{$type}' name='{$name}' id='{$id}' placeholder='{$placeholder}' /> {$label}";
    }
}

?>