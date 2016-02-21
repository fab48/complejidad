<?php
    
    Class Search
    {
        var $cvte;
        var $person;
        
        function __construct() {
            $this->cvte     = "";
            $this->person   = "";
        }
        
        function getPerson   ($person) { 
            //Busca por tipoId y NumId la persona. Si existe no se crea nuevamente.            
            $person_person = null;
            $tpId  = ($person->getTypeId());
            $nroId = ($person->getNroId());
            $query = "select PERSON_PERSON, PERSON_NOMBRES, PERSON_APELLIDOS
                      from   ge_tperson
                      where  person_tpid    ='".$tpId."' 
                      and    person_num_id  ='".$nroId."'"
                      .";"
                      ;
            $link   = Connect::conn();
            $resultado = mysql_query($query, $link);            
            if($reg=mysql_fetch_array($resultado)){
                $person_person = $reg;
            }else{
                $person_person = null;
            }
                        
            mysql_close($link); 
            return $person_person;
        
        }
    }
?>