<?php
    Class personaConvocante
    {
        var $pscv  ;
        var $person;
        var $cvte  ;
        var $user  ;
        var $feccre;
        
        function __construct() {
            $this->pscv     = "";
            $this->person   = "";
            $this->cvte     = "";
            $this->user     = "";
            $this->feccre   = "";
        }
        
        public function registrarPSCV($p_person, $p_cvte){
            if(empty($p_person) or empty($p_cvte) ){
                return "OK";
            }
            $cod_rpta = "";
            $insert = $this->mapPSCV($p_person, $p_cvte);  
            $link   = Connect::conn();
            
            $result = mysql_query($insert, $link);
            $error = mysql_error($link);

            if($result) {
                $cod_rpta = ("OK");
            } else {
                $cod_rpta = ("No es posible realizar la inscripción de persona-convocante.");
            }
           
            mysql_close($link); 
            
            return $cod_rpta;
        
        }
        
        public function mapPSCV($p_person, $p_cvte){
            $insert = "
                INSERT INTO ec_tpscv (
                                         PSCV_PSCV
                                       , PSCV_PERSON
                                       , PSCV_CVTE
                                       , PSCV_USER
                                       , PSCV_FECCRE
                )
                VALUES (
                                         NULL 
                                       , upper('".$p_person."')
                                       , upper('".$p_cvte."')
                                       , 'USER'
                                       , SYSDATE()
                );
            ";
            return $insert;
        }
    }
?>