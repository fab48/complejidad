<?php
    require("connect.php");
    require('person.php');
    require('search.php');
    
    class RegisterAss
    {
        public function addAssistance($assistance){
            
            $cod_rpta = "";
            $search  = new Search();
            $persona = new person();
            
            $persona->setTypeId   ($assistance->getTypeId   ());
            $persona->setNroId    ($assistance->getNroId    ());
            
            $person_person = $search->getPerson($persona);
            
            
            if(!empty($person_person)){
                $var_dummy = $this->validaRegistro($person_person, $assistance);
                if(!empty($var_dummy)){
                    $cod_rpta =   "Persona"
                            . " con tipo de identificacion <"
                            . $assistance->getTypeId()
                            ."> y nro. documento <"
                            . $assistance->getNroId()
                            . "> ya registro asistencia para la jornada."
                            ;
                }else{
                    $assistance->setPerson($person_person['PERSON_PERSON']);
                    $insert = $this->map_Assistance($assistance);  
                    $link   = Connect::conn();
                    
                    $result = mysql_query($insert, $link);
                    $error = mysql_error($link);

                    if($result) {
                        $cod_rpta = ("Registro de Asistencia realizado para: " . $person_person['PERSON_NOMBRES'] . " " . $person_person['PERSON_APELLIDOS']);
                    } else {
                        $cod_rpta = ("No es posible realizar el registro en este momento. Intente mas tarde.");
                    }
                   
                    mysql_close($link); 
                }
            }else{  
                $cod_rpta =   "Persona"
                            . " con tipo de identificacion <"
                            . $assistance->getTypeId()
                            ."> y nro. documento <"
                            . $assistance->getNroId()
                            . "> NO se encuentra registrada."
                            ;
            } 
            return $cod_rpta;
        }
        
        function validaRegistro($person_person, $assistance) { 
            $Msg_Result = null;            
            $query = "select 'X'
                      from   ec_tasist
                      where  asist_person    ='".$person_person['PERSON_PERSON']."' 
                      and    asist_cvte      ='".$assistance->getCvte     ()."'"
                      .";"
                      ;
            $link   = Connect::conn();
            $resultado = mysql_query($query, $link);            
            if($reg=mysql_fetch_array($resultado)){
                $Msg_Result = $reg;
            }else{
                $Msg_Result = null;
            }
                        
            mysql_close($link); 
            return $Msg_Result;        
        }
                        
        private function map_Assistance($assistance){       
            $insert = "
                        INSERT INTO ec_tasist (
                                  ASIST_ASIST
                                , ASIST_PERSON
                                , ASIST_CVTE
                                , ASIST_CONF
                                , ASIST_USER
                                , ASIST_FECCRE
                                )
                                VALUES (
                                          NULL 
                                        , upper('".$assistance->getPerson   ()."') 
                                        , upper('".$assistance->getCvte     ()."')
                                        , NULL 
                                        , NULL
                                        , SYSDATE()
                                )        
                    ";
            //echo "</br>Fin Map=". $insert. " **" ;
            return $insert;
        }
    }

?>
