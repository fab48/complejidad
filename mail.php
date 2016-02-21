<?php
	require("template.php");
	class mailSend{
		var $rInfoMail = "";
		function __construct() {
			$rInfoMail='';			
		}
		
		function send($email,$asunto,$mensaje){			
				$cabeceras = 'From: Grupo de Complejidad <grupocomplejidadud@gmail.com>' . "\r\n" .
								'Reply-To: grupocomplejidadud@gmail.com' . "\r\n";
				$cabeceras .= "MIME-version: 1.0\n";
				$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n ";
				$cabeceras .= "boundary=\"Message-Boundary\"\n";
				$cabeceras .= "Content-transfer-encoding: 7BIT\n";			
									
				if(mail($email,$asunto,$mensaje,$cabeceras)){
					$rInfoMail = "OK";					
				}else{
					$rInfoMail = "ER";
				}				
				return $rInfoMail;
		}		
	}
    /*
	$newemail = new mailSend();
    $vTemplate = new Template();
	echo 'Mail<br>';
	echo $newemail->send('ygmno-alt@yahoo.es', 'V Encuentro sobre complejidad y I simposio sobre complejidad y educación',$vTemplate->getEmailMsg("", ""));
    */
	

?>