<?php require_once "Product.php";

 
    class Medicine extends Products{
        private $dose;
        private $type;
        private $expirationDate;


        function setDose($dose){
            $this->dose=$dose;
        }
        function setType($type){
            $this->type=$type;
        }
        function setExpirationDate($expirationDate){
            $this->expirationDate=$expirationDate;
        }
        

        function getDose(){
            return $this->dose;
        }
        function getType(){
            return $this->type;
        }
        function getExpirationDate(){
            return $this->expirationDate;
        }

        function computeSrp(){
            return $this-> getPrice * 2;
        }
        
    

 }









?>