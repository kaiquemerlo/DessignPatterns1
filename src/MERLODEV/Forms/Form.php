<?php 
namespace MERLODEV\Forms;
class Form{    
    
    private $action;
    private $method;
    
    public function __construct($action = null, $method = null){
        $this->action = $action;
        $this->method = $method;
    }
    
    public function render($campos){
        if(!empty($campos) AND $campos != null){
            echo "<form action='{$this->action}' method='{$this->method}' enctype='multipart/formdata'>";
            foreach($campos as $cmp){
                echo $cmp."</br></br>";
            }  
            echo "</form>";
        }
    }    
}
?>