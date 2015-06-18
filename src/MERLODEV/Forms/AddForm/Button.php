<?php 
namespace MERLODEV\Forms\AddForm;
class Button implements \MERLODEV\Forms\IntForms\ButtonInt{
    
    public function addButton($name, $id, $type, $value){
        return "<button name='{$name}' id='{$id}' type='{$type}'>{$value}</button>";
    }
    
}