<?php    

    require('person.php');
    require('personaConvocante.php');
    require('register.php');
    require('search.php');
    require('mail.php');
    
    
    $persona = new person();
    $pscv    = new personaConvocante();
    $search  = new Search();
    
    $persona->setName     (@$_REQUEST['formName']  );
    $persona->setLastname (@$_REQUEST['formLast']  );
    $persona->setTypeId   (@$_REQUEST['formTypeId']);
    $persona->setNroId    (@$_REQUEST['formNroId'] );
    $persona->setEmail    (@$_REQUEST['formEmail'] );
    $persona->setDate     (@$_REQUEST['formDate']  );
    $persona->setGender   (@$_REQUEST['formGender']);
    $persona->setCity     (@$_REQUEST['formCity']  );
    $persona->setEnti     (@$_REQUEST['formEnti']  );
    $persona->setProf     (@$_REQUEST['formProf']  );
    
    $registro = new Register();
    $result = $registro->addRegister($persona);
    if($result == "OK"){    
        $person_person = $search->getPerson($persona);
        $result = $pscv->registrarPSCV($person_person['PERSON_PERSON'], (@$_REQUEST['formCheck0']));
        $result = $pscv->registrarPSCV($person_person['PERSON_PERSON'], (@$_REQUEST['formCheck1']));
        $result = $pscv->registrarPSCV($person_person['PERSON_PERSON'], (@$_REQUEST['formCheck2']));
        $result = $pscv->registrarPSCV($person_person['PERSON_PERSON'], (@$_REQUEST['formCheck3']));
        $result = $pscv->registrarPSCV($person_person['PERSON_PERSON'], (@$_REQUEST['formCheck4']));
        $result = $pscv->registrarPSCV($person_person['PERSON_PERSON'], (@$_REQUEST['formCheck5']));
        if($result == "OK"){
            $result = "Inscripcion realizada con exito.";
            $newemail  = new mailSend();
            $vTemplate = new Template();
            $newemail->send($persona->getEmail(), 'V Encuentro sobre complejidad y I simposio sobre complejidad y educación', $vTemplate->getEmailMsg("", $persona));
        }        
    }    
    echo $result;
                         


?>
