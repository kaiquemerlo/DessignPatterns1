<?php 
namespace MERLODEV\Forms;
class Form{    

    private $campo;

    public function __construct($action = null, $method = null){
        $this->action = $action;
        $this->method = $method;
    }

    public function addCampo($campo){
        $this->campo[] = $campo;
    }
    
    public function render(){
        if(!empty($this->campo) AND $this->campo != null){
            echo "<form action='{$this->action}' method='{$this->method}' enctype='multipart/formdata'>";
            foreach($this->campo as $cmp){
                echo $cmp."</br></br>";
            }  
            echo "</form>";
        }
    }    
}
?>