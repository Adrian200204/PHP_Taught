<?php
    class calculator{
        public $num1;
        public $operator;
        public $num2;

        public function __construct($num1Inserted, $num2Inserted, $calInserted){
            $this->num1 = $num1Inserted;
            $this->operator = $calInserted;
            $this->num2 = $num2Inserted;
        }

        public function calcMethod() {
            switch ($this->operator) {
              case 'add':
                  $result = $this->num1 + $this->num2;
                  break;
              case 'sub':
                  $result = $this->num1 - $this->num2;
                  break;
              case 'mul':
                  $result = $this->num1 * $this->num2;
                  break;
              case 'divide':
                    $result = $this->num1 / $this->num2;
                    break;
      
              default:
                  $result = "Error";
                  break;
            }
            return $result;
          }
    }
    $num1 = $_POST['num1Inserted'];
    $num2 = $_POST['num2Inserted'];
    $cal = $_POST['calInserted'];
  
    $calculator = new calculator($num1, $num2, $cal);
    echo $calculator->calcMethod();
    
?>
