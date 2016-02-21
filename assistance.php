<?php
Class Assistance
{
    var $cvte;
    var $typeId;
    var $nroId;
    var $person;

    function __construct() {
        $this->cvte     = "";
        $this->typeId   = "";
        $this->nroId    = "";
        $this->person   = "";
    }
    
    function setCvte     ($cvte    ) { $this->cvte     = $cvte    ; }
    function setTypeId   ($typeId  ) { $this->typeId   = $typeId  ; }
    function setNroId    ($nroId   ) { $this->nroId    = $nroId   ; }
    function setPerson   ($person  ) { $this->person   = $person   ; }

    function getCvte     () { return $this->cvte     ; }
    function getTypeId   () { return $this->typeId   ; }
    function getNroId    () { return $this->nroId    ; }
    function getPerson   () { return $this->person    ; }
}
?>




                                                     
