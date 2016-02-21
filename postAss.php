<?php    

    require('assistance.php');
    require('registerAss.php');
    
    
    $assistance = new Assistance();
    $register   = new RegisterAss();
      
    $assistance->setTypeId    (@$_REQUEST['formTypeId2']);
    $assistance->setNroId     (@$_REQUEST['formNroId2']);
    $assistance->setCvte      (@$_REQUEST['formCvte2']);
                        
    $result = $register->addAssistance($assistance);
 
    echo $result;
                         


?>
