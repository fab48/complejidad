<?php
Class person
{
    var $name;
    var $lastname;
    var $typeId;
    var $nroId;
    var $email;
    var $date;
    var $gender;
    var $city;
    var $enti;
    var $prof;
    
    function __construct() {
        $this->name     = "";
        $this->lastname = "";
        $this->typeId   = "";
        $this->nroId    = "";
        $this->email    = "";
        $this->date     = "";
        $this->gender   = "";
        $this->city     = "";
        $this->enti     = "";
        $this->prof     = "";
    }
    
    function setName     ($name    ) { $this->name     = $name    ; }
    function setLastname ($lastname) { $this->lastname = $lastname; }
    function setTypeId   ($typeId  ) { $this->typeId   = $typeId  ; }
    function setNroId    ($nroId   ) { $this->nroId    = $nroId   ; }
    function setEmail    ($email   ) { $this->email    = $email   ; }
    function setDate     ($date    ) { $this->date     = $date    ; }
    function setGender   ($gender  ) { $this->gender   = $gender  ; }
    function setCity     ($city    ) { $this->city     = $city    ; }
    function setEnti     ($enti    ) { $this->enti     = $enti    ; }
    function setProf     ($prof    ) { $this->prof     = $prof    ; }

    function getName     () { return $this->name     ; }
    function getLastname () { return $this->lastname ; }
    function getTypeId   () { return $this->typeId   ; }
    function getNroId    () { return $this->nroId    ; }
    function getEmail    () { return $this->email    ; }
    function getDate     () { return $this->date     ; }
    function getGender   () { return $this->gender   ; }
    function getCity     () { return $this->city     ; }
    function getEnti     () { return $this->enti     ; }
    function getProf     () { return $this->prof     ; }
}
?>




                                                     
