<?php 
    class motorcycle{
        public $tipe;
        public $merk;

        function set_tipe($tipe){
            $this->tipe = $tipe;
        }

        function set_merk($merk){
            $this->merk = $merk;
        }

        function get_tipe(){
            return $this->tipe;
        }

        function get_merk(){
            return $this->merk;
        }
    }
?>