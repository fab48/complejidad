<?php
    require("connect.php");

    $query = "SELECT  CONF_CONF                                                      CONF_CONF
                    , CONF_ENCTRO                                                    CONF_ENCTRO
                    , CONF_NOMBRE                                                    CONF_NOMBRE
                    , CONF_DESC                                                      CONF_DESC
                    , (select pais_nombre from ge_tpais where pais_pais = CONF_PAIS) CONF_PAIS
                    , CONF_CIUD                                                      CONF_CIUD
                    , DATE_FORMAT(CONF_FECINI,'%Y-%m-%d %H:%i')                      CONF_FECINI
                    , DATE_FORMAT(CONF_FECFIN,'%Y-%m-%d %H:%i')                      CONF_FECFIN
                    , CONF_HRINI                                                     CONF_HRINI
                    , CONF_HRFIN                                                     CONF_HRFIN
                    , CONF_LUGAR                                                     CONF_LUGAR
                    , CONF_DIREC                                                     CONF_DIREC
                    , CONF_DURA                                                      CONF_DURA
                    , CONF_ALLDAY                                                    CONF_ALLDAY
                    , CONF_COLOR                                                     CONF_COLOR
                    , CONF_TXTCOLOR                                                  CONF_TXTCOLOR
              FROM    ec_tconf	
              where  conf_enctro = 5
              order by CONF_FECINI asc
              "
              .";"
              ;
    $link   = Connect::conn();
    $result = mysql_query($query, $link);
    if(mysql_num_rows($result)>0){
        $stack = array();
        while($row=mysql_fetch_array($result)){
            $query2 = "select  EXPCONF_CONF
                             , EXPCONF_PERSON
                             , CONCAT(PERSON_NOMBRES, ' ', IFNULL(PERSON_APELLIDOS, '') ) EXPCONF_PERSON_DESC
                             , PERSON_ENTIDAD EXPCONF_PERSON_ENTIDAD
                             , (select pais_nombre from ge_tpais where pais_pais = person_pais) EXPCONF_PERSON_PAIS
                             , EXPCONF_ENTIDAD
                             , EXPCONF_PAIS
                       from    ge_tperson, ec_texpconf
                       where   EXPCONF_PERSON = PERSON_PERSON
                       and     EXPCONF_CONF = ". $row['CONF_CONF']
                      .";"
                      ;
            $result2 =  mysql_query($query2, $link);
            $description = '';
            while( $auth=mysql_fetch_array($result2)){
                $description = $description
	                                        . "<div class=\"fc-event-auth\">" 
	                                               . $auth['EXPCONF_PERSON_DESC']
	                                               . ((!empty($auth['EXPCONF_ENTIDAD']))? " - <span class=\"fc-event-auth-d\">". $auth['EXPCONF_ENTIDAD'] . "</span>":"")
	                                               . ((!empty($auth['EXPCONF_PAIS']))? " - <span class=\"fc-event-auth-d\">". $auth['EXPCONF_PAIS']    . "</span>":"")
	                                        . "</div>";
	        } 
	        if(!empty($row['CONF_ALLDAY'])){
                array_push($stack, array(
                                    'id'         => $row['CONF_CONF'],
                                    'title'      => $row['CONF_NOMBRE'],
                                    'start'      => $row['CONF_FECINI'],
                                    'end'        => $row['CONF_FECFIN'],
                                    'color'      => $row['CONF_COLOR'],
                                    'textColor'  => $row['CONF_TXTCOLOR'],
                                    'allDay'     => $row['CONF_ALLDAY'],
                                    'description'  => "<div class=\"fc-event-auth\">" 
                                                           . $row['CONF_DESC'] 
                                                    . "</div>"
                ));                         
            }else{
                array_push($stack, array(
                                    'id'           => $row['CONF_CONF'],
                                    'title'        => $row['CONF_NOMBRE'],// . " - " . $auth['EXPCONF_PERSON_DESC'] . " - " . $auth['EXPCONF_ENTIDAD'] . " - " . $auth['EXPCONF_PAIS'],
                                    'start'        => $row['CONF_FECINI'],
                                    'end'          => $row['CONF_FECFIN'],
                                    'color'        => $row['CONF_COLOR'],
                                    'textColor'    => $row['CONF_TXTCOLOR'],
                                    'description'  => $description
                ));             
            }   
        }
    }else{
        echo "";
    }
    mysql_close($link);   
	echo json_encode($stack);
?>
