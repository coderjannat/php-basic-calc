<?php

class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $oper, int $one, int $two) {
        $this-> operator = $oper;
        $this-> num1 = $one;
        $this-> num2 = $two;
    }
 
     public function calculator() {
         switch ($this-> operator) {
            case 'add' :
                $result =  $this-> num1 +  $this-> num2;
                return  $result ;
                break;
            case 'sub' :
                $result =  $this-> num1 -  $this-> num2;
                return  $result ;
                break;
            case 'div' :
                $result =  $this-> num1 /  $this-> num2;
                return  $result ;
                break;
            case 'mul' :
                $result =  $this-> num1 *  $this-> num2;
                return  $result ;
                break;
            default:
                echo "Error!";
                break;    
         }
     }   
   
}

?>
<!-- folder name change -->