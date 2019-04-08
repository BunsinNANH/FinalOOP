<?php namespace CodeCourse;
    class Calculate{
        public $firstNumber;
        public $sencodNumber;

        public function __constract($firstNumber,$sencodNumber){
            $this->firstNumber = $firstNumber;
            $this->secondNumber = $secondNumber;
        }

        function getFirstNumber(){
            return $this->firstNumber;
        }
        function getSecondNumber(){
            return $this->secondNumber;
        }

        public function add(){
            return $result = $firstNumber + $secondNumber;
        }
        public function minus(){
            return $result = $firstNumber - $secondNumber;
        }
        public function multiply(){
            return $result = $firstNumber * $secondNumber;
        }
        public function devide(){
            return $result = $firstNumber / $secondNumber;
        }
    }
?>