<?php
	class Template{
		var $rInfoMail = "";
		function __construct() {
			$rInfoMail='';			
		}
		
		function getEmailMsg($tipo, $person){			
			$rInfoMail='
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
                <html>
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <title>Conferencias mensuales Grupo de complejidad Universidad Distrital</title>
                <style type="text/css">
                    img {
                        border:none;
                    }
                    body {
                        text-decoration:none;
                    }
                    a {
                        text-decoration:none;	
                    }
                    table {
                        cursor:pointer;
                    }
                </style>
                </head>
                <body>


                <table width="611" height="592" border="0" cellpadding="0" cellspacing="0" align="center"  bordercolor="#b07d77" bgcolor="#ffffff" onclick="document.location.href=\'http://gemini.udistrital.edu.co/comunidad/grupos/complejidad/vec/\';" style="background-image:url(http://gemini.udistrital.edu.co/comunidad/grupos/complejidad/vec/images/email/mail_log_b001.png);">
                  <tr>
                    <td width="611" >
                        <table width="611" border="0" cellpadding="0" cellspacing="0" align="center" bordercolor="#b07d77"  style="">
                            <tr>
                                <td  >
                                    <div align="center">
                                        <font size="5" color="#FFFFFF" face="Calibri"><b>Junio 9 de 2014</b></font>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="611" height="350" >
                            
                        <font face="Trebuchet MS" size="2" color="#666666">									
                            <div align="justify">
                                <table width="611"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td width="190">
                                                
                                        </td>
                                        <td width="185">
                                            
                                        </td>
                                        <td width="185" height="40">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="180">
                                            
                                        </td>
                                        <td width="185" colspan="2" >
                                            <div align="left">
                                                <font size="5" color="#333333">'. $this->getGenero($person) . " " . ucwords($person->getName()) . " " . ucwords($person->getLastname()) .'</font>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="180">
                                            
                                        </td>
                                        <td width="185" colspan="2" height="50">
                                            <div align="left">
                                                <font size="3" color="#333333">¡Su inscripción se ha realizado con exito!</font>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="180">
                                            
                                        </td>
                                        <td width="185" colspan="2" height="90">
                                            <div align="justify">
                                                <font size="2" color="#999999">Recuerde registrar su asistencia.</font>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="180">
                                            
                                        </td>
                                        <td width="185">
                                            
                                        </td>
                                        <td width="185">
                                            <a href="http://gemini.udistrital.edu.co/comunidad/grupos/complejidad/vec/">
                                                <div><font size="1" color="#999999">&nbsp;</font></div>
                                                <div align="right">
                                                    <span ><font size="2" face="Trebuchet MS" color="#DA251D">
                                                        <b>Más informaci&oacute;n</b></font>
                                                    </span><br /> 													  				   							
                                                </div>
                                            </a>    
                                        </td>
                                    </tr>
                                </table>										   							
                            </div>																																				
                        </font>
                    </td>
                  </tr>
                  <tr style="background-color:#FFFFFF;">
                    <td width="611" height="65" bgcolor="#FFFFFF" style="background-color:#FFFFFF;">
                        <img src="http://gemini.udistrital.edu.co/comunidad/grupos/complejidad/vec/images/email/mail_log_b002.png" width="611"  alt="U Rosario, UNAL, PUJ, U Distrital, Grupo Complejidad, U Autónoma, FUCS, ISTEC" />
                    </td>
                  </tr>
                </table>
                </body>
                </html>
            ';
			return $rInfoMail;
		}		
        
        function getGenero($persona){
            if($persona->getGender() == "H"){
                return "Sr.";
            }else{
                return "Sra.";
            }
        }
	}
?>
