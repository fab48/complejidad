<?php
    require("connect.php");
    
    class Register
    {
        public function addRegister($person){     
            
            $cod_rpta = "";
            
            if($this->validaPerson($person)){
                $cod_rpta =   "Persona <" . $person->getName() 
                            . "> con tipo de identificacion <"
                            . $person->getTypeId()
                            ."> y nro. documento <"
                            . $person->getNroId()
                            . "> ya se encuentra registrado."
                            ;
            }else{                
                $insert = $this->map_person($person);  
                $link   = Connect::conn();
                
                $result = mysql_query($insert, $link);
                $error = mysql_error($link);

                if($result) {
                    $cod_rpta = ("OK");
                } else {
                    $cod_rpta = ("No es posible realizar la inscripción en este momento. Intente mas tarde.");
                }
               
                mysql_close($link); 
            } 

            return $cod_rpta;
        }
        
        public function validaPerson($person){
            //Busca por tipoId y NumId la persona. Si existe no se crea nuevamente.            
            $tpId  = ($person->getTypeId());
            $nroId = ($person->getNroId());
            $query = "select 'X'
                      from   ge_tperson
                      where  person_tpid    ='".$tpId."' 
                      and    person_num_id  ='".$nroId."'"
                      .";"
                      ;
            
            $resultado = mysql_query($query,Connect::conn());
            if($reg=mysql_fetch_array($resultado))
            {
                return true;
            }else{
                return false;
            }
        }
        
        private function map_person($person){
            
            $insert = "
                        INSERT INTO ge_tperson (
                                          PERSON_PERSON 
                                        , PERSON_TPID 
                                        , PERSON_NUM_ID 
                                        , PERSON_NOMBRES 
                                        , PERSON_APELLIDOS 
                                        , PERSON_GENERO 
                                        , PERSON_EMAIL 
                                        , PERSON_FECNAC
                                        , PERSON_TEL 
                                        , PERSON_CEL 
                                        , PERSON_PAIS
                                        , PERSON_CIUD 
                                        , PERSON_PROFESION 
                                        , PERSON_ENTIDAD
                                        , PERSON_USER 
                                        , PERSON_FECCRE 
                             ) VALUES (  
                                          NULL 
                                        , upper('".$person->getTypeId    ()."') 
                                        , upper('".$person->getNroId     ()."')
                                        , upper('".$person->getName      ()."')
                                        , upper('".$person->getLastname  ()."')
                                        , upper('".$person->getGender    ()."')
                                        , upper('".$person->getEmail     ()."')
                                        , '".$person->getDate      ()."'
                                        , null
                                        , null
                                        , null
                                        , null
                                        , upper('".$person->getProf     ()."')
                                        , upper('".$person->getEnti     ()."')
                                        , null
                                        , SYSDATE()
                            )    
                        ";
                        //echo "</br>Fin Map=". $insert. " **" ;
            return $insert;
        }
        
        
    }

?>
