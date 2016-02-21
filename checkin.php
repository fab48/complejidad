<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php // Manual de PHP de WebEstilo.com 
include "login.php";

if($_SESSION['valido']==0)
            {
               
                    header("location:login.php");
            }
            
?> 
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="robots" content="noindex,nofollow" />
    <title>V Encuentro Interuniversitario sobre complejidad</title>
    <link 
        href="resources/themes/normalize.css"
        rel="stylesheet" type="text/css" />
    <link 
        href="resources/themes/styles_Selectize.css"
        rel="stylesheet" type="text/css" />    
    <link 
        href="resources/themes/style.css"
        rel="stylesheet" type="text/css" />
      
    <link 
        href="resources/themes/stylesIx.css" 
        rel="stylesheet" type="text/css" />
          
    <script
        src="resources/scripts/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js" 
        type="text/javascript"></script>
    <script
        src="resources/scripts/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"
        type="text/javascript"></script>
    <script
        src="resources/scripts/jquery.validate.js"
        type="text/javascript"></script>
    <script 
        src="resources/scripts/date.js" 
        type="text/javascript"></script>
    <script 
        src="http://yandex.st/highlightjs/7.3/highlight.min.js"
        type="text/javascript"></script>
	<script 
        src="resources/scripts/selectize.js"
        type="text/javascript"></script>

    
    <script src="resources/scripts/slider/amazingslider.js"></script>
    <script src="resources/scripts/slider/initslider-1.js"></script>
    
    <script
        src="resources/scripts/main.js" 
        type="text/javascript" charset="UTF-8"></script>

    <link rel='stylesheet' href='resources/themes/calendar/theme.css' />
    <link rel='stylesheet' href='resources/themes/calendar/fullcalendar.css'  />
    <link rel='stylesheet' href='resources/themes/calendar/fullcalendar.print.css'  media='print' />
    <script src='resources/scripts/calendar/fullcalendar.min.js' type="text/javascript"></script>
    
    <style>
        
        .myErrors {
            color:red;
            display: none;
        }
        td {
            padding-left:10px;
        }
        
        input {
            border: 5px solid white; 
            -webkit-box-shadow: 
              inset 0 0 8px  rgba(0,0,0,0.1),
                    0 0 16px rgba(0,0,0,0.1); 
            -moz-box-shadow: 
              inset 0 0 8px  rgba(0,0,0,0.1),
                    0 0 16px rgba(0,0,0,0.1); 
            box-shadow: 
              inset 0 0 8px  rgba(0,0,0,0.1),
                    0 0 16px rgba(0,0,0,0.1); 
            padding: 8px;
            background: rgba(255,255,255,0.5);
            margin: 0 0 10px 0;
            
            
            border-radius:5px;            
            border: 1px solid rgb(197, 219, 236);
            background: url("resources/scripts/jquery-ui-1.10.3.custom/css/custom-theme/images/ui-bg_glass_85_dfeffc_1x400.png") repeat-x scroll 50% 50% rgb(223, 239, 252);
            font-weight: bold;
            color: rgb(46, 110, 158);
        }
    </style>
    
    <script type="text/javascript" charset="UTF-8">
        $(document).ready(function() {
            $("#header-title").html("Registro Asistencia");
            
            $('#formTypeId2').selectize({
                sortField: 'text'
            });
            
            $('#formCvte2').selectize({
                sortField: 'text'
            });
            
            var validator = $("#checkin").validate({
            
                // JDR: make sure we show/hide both blocks
                errorContainer: "#errorblock-div12, #errorblock-div22",
                
                // JDR: put all error messages in a UL
                errorLabelContainer: "#errorblock-div22 ul",
                
                // JDR: wrap all error messages in an LI tag
                wrapper: "li",
              
                rules: {
                    formTypeId2: "required",
                    formNroId2: "required",
                    formCvte2: "required"
                },
                
                //custom error messages
                messages: {
                    formNroId2:{
                        required: "Escriba su identificación."
                        },
                    formCvte2: {
                        required: "Seleccione la jornada de asistencia."
                    }
                },
                
                submitHandler: function(){                    
                    $.post("postAss.php?"+$("#checkin").serialize(), {
                               }, function(response){
                                 
                                    if(response==1){                                        
                                        var template = " <p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span><strong>" + response +"</strong></p>";
                                        $("#ui-info-success-txt").html(template); 
                                    }
                                    else{
                                        var template = " <p style=\"margin-top:15px;\"><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span><b>" + response +"</b></p>";
                                        $("#ui-info-success-txt2").html(template);
                                        $("#ui-info-success2").fadeIn();
                                        successEvents('#ui-info-success2');
                                        $(".form-clear").val("");
                                        $("input[type=checkbox]:checked").removeAttr('checked');
                                    }
                                }
                            );                          
                }
            });
            
        });
    </script>

</head>


<body>

    <div id="bgWrapper" class="unoMas" align="center" style="height:100%; border:0px solid #1BE059; ">
    
            <!-- Inicio Logo Superior//-->
            <?php include('parte_pag/logotop.php');?>
            <!-- FIN Logo Superior//-->
            
            <!-- Inicio Menu//-->
            <?php include('parte_pag/nav.php');?>
            <!-- Fin Menu//-->	          
                    

            <!-- -------------------------------------------------------------------------------------------- -->
            
            <div id="contenidoInt" style="padding:5px 0 5px 0; 
                                          width:1040px;                                           
                                          height: auto !important;
                                          border:0px solid #00FF66; 
                                          background-color:#FFFFFF; ">
            
				
				<h3 style="padding: 0px 0px 0px 0px; text-align:left;" align=left>
                    En la columna de la izquierda se busca el documento de quien esté inscrito, para registrar su asistencia. Si no está inscrito, use el formulario de inscripciones a la derecha.  
                 Tambi&eacuten puedes <a href="logout.php">cerrar la sesi&oacuten.</a>
				</h3>		
            </div>
                
            
            <div id="" style="margin-top:0px; 
                              width:1040px; 
                              height: auto !important;
                              border:0px solid #00FF66; 
                              background-color:#FFFFFF;">

                
                
                <div class="ui-widget ui-widget-content ui-corner-all" 
                            style="width:500px; font-family: 'Trebuchet MS'; float:right; " >
                        
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all" style="margin: 0px 0px 0px 0px;">
                            <div class="ui-datepicker-title" style="padding: 10px; ">
                                <span class="ui-datepicker-month">INSCRIPCIÓN DE ASISTENTES</span>
                            </div>
                        </div>
                        
                        <div class="ui-widget ui-helper-hidden" id="errorblock-div1" style="margin: 10px;">
                            <div class="ui-state-error ui-corner-all" id="errorblock-div2" style="display:none; text-align:left;"> 
                                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;">
                                    </span>Revise su solicitud, hay campos inválidos o sin llenar.</p>
                                <ul></ul>
                            </div>
                        </div>
                        
                        
                                            
                        <div id="contentForm" style="margin:10px;">
                            <form id="samplecode" name="samplecode" method="post" action="post.php">
                                <table>
                                    <tr>
                                        <td valign="top">
                                        <label for="formTypeId"> * Tipo de Identificación  </label>
                                        </td>
                                        <td>
                                        <div class="demo" >
                                            <select class="form-clear" id="formTypeId" name="formTypeId" title="Seleccione un tipo de identificación">
                                            <option value="">Elija una opción</option>
                                            <option value="1" selected>Cédula de Ciudadanía</option>
                                            <option value="4">Cédula de Extrajeria</option>
                                            <option value="5">Pasaporte</option>
                                            <option value="3">Tarjeta de identidad</option>
                                            <option value="2">NIT</option>
                                            </select>
                                            <div class="myErrors" >
                                                <div class="ui-widget">
                                                    <div class="ui-state-error ui-corner-all" style="">
                                                        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
                                                    </div>
                                                </div>                                
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formNroId"> * Identificación  </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formNroId" type="text" name="formNroId" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formGender"> * Género  </label>
                                        </td>
                                        <td>
                                        <input  type="radio" name="formGender" value="H" /> Hombre
                                        <input  type="radio" name="formGender" value="M" /> Mujer							
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formName"> * Nombres  </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formName" type="text" name="formName" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formLast"> * Apellidos  </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formLast" type="text" name="formLast" size="50" value="" style="  "/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td valign="top">
                                        <label for="formEmail"> * Email </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formEmail" type="text" name="formEmail" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formEmail"> &nbsp; Entidad </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formEnti" type="text" name="formEnti" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td valign="top">
                                        <label for="formEmail"> &nbsp; Profesión </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formProf" type="text" name="formProf" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formDate"> &nbsp; Fecha de Nacimiento  </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formDate" type="text" name="formDate" size="20" value=""/>&nbsp;(yyyy-mm-dd)
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <label for="formDate"> &nbsp; Por favor elija los días que asistira: </label>
                                        </td>
                                        <td>
                                            <input type="checkbox" class="cb" id="formCheck0" name="formCheck0" value="1" rel="1" disabled></input> Lunes - Universidad del Rosario.<br />
                                            <input type="checkbox" class="cb" id="formCheck1" name="formCheck1" value="2" rel="2" disabled></input> Martes - Universidad Nacional. <br />
                                            <input type="checkbox" class="cb" id="formCheck2" name="formCheck2" value="3" rel="3" disabled></input> Miercoles - Universidad Javeriana.<br />
                                            <input type="checkbox" class="cb" id="formCheck3" name="formCheck3" value="4" rel="4" disabled></input> Jueves - Universidad Pedagógica, Universidad Distrital, ISTEC (Museo Nacional)<br />
                                            <input type="checkbox" class="cb" id="formCheck5" name="formCheck5" value="6" rel="6"></input> Viernes - Universidad Distrital.<br />
                                            <input type="checkbox" class="cb" id="formCheck4" name="formCheck4" value="5" rel="5"></input> <b>Sábado</b> - Universidad Autónoma.<br />
                                            <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <button aria-disabled="false" role="button" 
                                                    class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" 
                                                    id="processForm">
                                                <span class="ui-button-text">Inscribirme</span>
                                            </button>
                                            
                                            <div id="ui-info-success"  class="ui-widget" style="display:none;">
                                                <div id="ui-info-success-txt" class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
                                                    
                                                </div>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="ui-widget ui-widget-content ui-corner-all" 
                         style="width:535px; font-family: 'Trebuchet MS'; float:left;" >
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all" style="margin: 0px 0px 0px 0px;">
                            <div class="ui-datepicker-title" style="padding: 10px;">
                                <span class="ui-datepicker-month">REGISTRO ASISTENCIA</span>
                            </div>
                        </div>
                        
                        <div class="ui-widget ui-helper-hidden" id="errorblock-div12" style="margin: 10px;">
                            <div class="ui-state-error ui-corner-all" id="errorblock-div22" style="display:none; text-align:left;"> 
                                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;">
                                    </span>Revise su solicitud, hay campos inválidos o sin llenar.</p>
                                <ul></ul>
                            </div>
                        </div>
                        
                        <div id="contentForm" style="margin:10px;">
                            <form id="checkin" name="checkin" method="post" action="postAss.php">
                                <table>
                                    <tr>
                                        <td valign="top">
                                        <label for="formTypeId2"> * Tipo de Identificación  </label>
                                        </td>
                                        <td>
                                        <div class="demo" >
                                            <select class="form-clear" id="formTypeId2" name="formTypeId2" title="Seleccione un tipo de identificación">
                                            <option value="">Elija una opción</option>
                                            <option value="1" selected>Cédula de Ciudadanía</option>
                                            <option value="4">Cédula de Extrajeria</option>
                                            <option value="5">Pasaporte</option>
                                            <option value="3">Tarjeta de identidad</option>
                                            <option value="2">NIT</option>
                                            </select>
                                            <div class="myErrors" >
                                                <div class="ui-widget">
                                                    <div class="ui-state-error ui-corner-all" style="">
                                                        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
                                                    </div>
                                                </div>                                
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formNroId2"> * Identificación  </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formNroId2" type="text" name="formNroId2" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                        <label for="formCvte2"> * Jornada  </label>
                                        </td>
                                        <td>
                                            <div class="demo" >
                                                <select class="form-clear" id="formCvte2" name="formCvte2" title="Seleccione la jornada">
                                                    <option value="">Elija una opción</option>                                                    
                                                    <option value="2">Universidad Nacional de Colombia</option>
                                                    <option value="4">Universidad Pedagógica</option>
                                                    <option value="3">Universidad Javeriana</option>                                                    
                                                    <option value="6" selected>Universidad Distrital Francisco José de Caldas</option>
                                                    <option value="5">Universidad Autónoma</option>
                                                </select>
                                                <div class="myErrors" >
                                                    <div class="ui-widget">
                                                        <div class="ui-state-error ui-corner-all" style="">
                                                            <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <button aria-disabled="false" role="button" 
                                                    class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" 
                                                    id="processForm2">
                                                <span class="ui-button-text">Registrar</span>
                                            </button>
                                            
                                            <div id="ui-info-success2"  class="ui-widget" style="display:none;">
                                                <div id="ui-info-success-txt2" class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
                                                    
                                                </div>
                                            </div>
                                            
                                        </td>
                                    </tr>
									
									
                                </table>
                            </form>
                        </div>
                        
                    </div>
                <div style="display:inline-table; clear:both; width:100%; border:0px solid;"></div>
            </div>
            <!-- Cierre Contenido//-->	

            
            <!-- -------------------------------------------------------------------------------------------- -->
            
            <!-- Ini. background_body//-->	            
            <?php include('parte_pag/backgroundBody.php');?>
            <!-- Fin. background_body//-->	
            
            <!-- footer//-->
            <?php include('parte_pag/footer.php');?>
            <!-- footer//-->
            
            <!-- -------------------------------------------------------------------------------------------- -->
        
</div>

</body>
</html>