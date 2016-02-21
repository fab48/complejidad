<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="robots" content="noindex,nofollow" />
    <title>Conferencias Mensuales Grupo de Complejidad UD</title>
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

</head>
<body>

<div id="bgWrapper" class="unoMas" align="center" style="height:100%; border:0px solid #1BE059; ">
    
        
    
            
            
            <!-- Inicio Menu//-->
            <?php include('parte_pag/nav.php');?>
            <!-- Fin Menu//-->	            
                    
            <!-- Inicio Contenido//-->
            <div id="contenidoInt" style="margin-top:0px; min-height:320px; height:370px; width:1040px; border:0px solid #00FF66; background-color:#FFFFFF; ">
                                          
                <div style="padding-top: 0px; max-width:950px;">    
                    <div id="amazingslider-1" style="display:block; position:static; background-color:#000000;">
                        <ul class="amazingslider-slides" style="display:none;">                           
                            <li><img src="images/util/slider/conf5.png" alt="MesAnio2" /></li>
                            <li><img src="images/util/slider/conf4.png" alt="MesAnio2" /></li>
                            <li><img src="images/util/slider/conf3.png" alt="MesAnio2" /></li>
                            <li><img src="images/util/slider/conf2.png" alt="MesAnio2" /></li>
                            <li><img src="images/util/slider/conf1.png" alt="MesAnio2" /></li>
                        </ul>
                    </div>
                </div>
               		
            </div> <!-- Cierre Contenido//-->	
            
            <!-- -------------------------------------------------------------------------------------------- -->
            
            
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
                                        <label for="formEmail"> &nbsp;* Entidad </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formEnti" type="text" name="formEnti" size="50" value=""/>
                                        <div class="myErrors"></div>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td valign="top">
                                        <label for="formEmail"> &nbsp;* Profesión </label>
                                        </td>
                                        <td>
                                        <input class="form-clear" id="formProf" type="text" name="formProf" size="50" value=""/>
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
                                                    id="processForm" enable>
                                                <span class="ui-button-text" >Inscribirme</span>
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
                                <span class="ui-datepicker-month">PROGRAMACIÓN</span>
                            </div>
                        </div>
                        
                        <div>
                                <div id="prog27" style="float:left;
                                      width:500px; height:150px;  border:0px solid #00FF66;                                       
                                      margin-left:15px;
                                      z-index: 4;
                                      bottom:0;
                                      background-image: url(images/util/box_planner_0000s_0001_26.png);
                                      background-repeat: no-repeat;
                                      background-size: 500px 145px">

                                    <div style="float:left; border: 0px solid #999999; 
                                                font-size: 75px; 
                                                margin-top: 24px; 
                                                margin-left: 17px; 
                                                color: rgb(232, 228, 227);                                                 
                                                font-family: 'Trebuchet MS';"
                                                >
                                        24
                                    </div>
                                    <div style="float:left; border: 0px solid #008822; 
                                                font-size: 12px; 
                                                margin-top: 26px; 
                                                margin-left: 19px; 
                                                color: #000000;                                                
                                                font-family: 'Trebuchet MS';                                                
                                                ">

                                            <b style="color: rgb(255, 255, 255)">Febrero</b>                                        
                                            <div class="ul-planner" style=""> 
                                                <ul>
                                                    Conversatorio: Jorge Villamil (Moderador)<br>
						    Lenguaje y auto-organización en los seres vivos <br>
						    Hora: 10:00am - 12:00pm <br>
                                                </ul>
                                            </div>

                                    </div>
                                    <div class="clear">&nbsp;</div>
                                </div>
                                <div id="prog27" style="float:left;
                                      width:500px; height:150px;  border:0px solid #00FF66; 
                                      margin-left: 30px;
                                      margin-top: -58px;
                                      z-index: 3;
                                      bottom:0;
                                      background-image: url(images/util/box_planner_0005s_0001_30.png);
                                      background-repeat: no-repeat;
                                      background-size: 500px 145px">
                                    
                                                                       
                                    <div style="float:right; border: 0px solid #999999; 
                                                font-size: 75px; 
                                                margin-top: 24px; 
                                                margin-right: 31px; 
                                                color: rgb(232, 228, 227);                                                 
                                                font-family: 'Trebuchet MS';"
                                                >
                                        2
                                    </div>                                    
                                    <div style="float:right; border: 0px solid #008822; 
                                                font-size: 12px; 
                                                margin-top: 23px; 
                                                margin-right: 75px; 
                                                color: #000000;                                                  
                                                font-family: 'Trebuchet MS'; 
                                                text-align: right;
                                                ">
                                            <b style="color: rgb(255, 255, 255)">Abril</b>                                        
                                            <div class="ul-planner" style="overflow:hidden"> 
                                                <ul>
                                                    Conferencia: Auto-organización Guida<br>
						    Conferencista: Ing. Nelson Gómez<br>
                                                    Hora: 10:00am - 12:00pm <br>
                                                </ul>
                                            </div>
                                    </div>                                     
                                    <div class="clear">&nbsp;</div>            
                                </div>
                                <div id="prog27" style="float:left;
                                      width:500px; height:150px;  border:0px solid #00FF66; 
                                      margin-left: 20px;
                                      margin-top: -58px;
                                      z-index: 2;
                                      bottom:0;
                                      background-image: url(images/util/box_planner_0004s_0001_29.2.png);
                                      background-repeat: no-repeat;
                                      background-size: 500px 145px">
                                    
                                    <div style="float:left; border: 0px solid #999999; 
                                                font-size: 75px; 
                                                margin-top: 24px; 
                                                margin-left: 17px; 
                                                color: rgb(232, 228, 227);                                            
                                                font-family: 'Trebuchet MS';"
                                                >
                                        28
                                    </div>
                                    <div style="float:left; border: 0px solid #008822; 
                                                font-size: 12px; 
                                                margin-top: 19px; 
                                                margin-left: 19px; 
                                                color: #000000;                                                   
                                                font-family: 'Trebuchet MS';     
                                                text-align:  left;
                                                ">
                                        <b style="color: rgb(255, 255, 255)">Abril</b>                                        
                                        <div class="ul-planner" style=""> 
                                            <ul>
                                                <a class="" style="color:#6F0"  href="publicidad/conf3.png" target="black">	
		                                    <u>Seminario taller: Modelado matemático en ingeniería</u><br>
		                                </a>                                                
						Conferencista: Dr. Marco Aurelio Álzate  <br>
                                                Hora: 10:00am - 12:00pm <br>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div id="prog27" style="float:left;
                                      width:500px; height:150px;  border:0px solid #00FF66; 
                                      margin-left: 40px;
                                      margin-top: -60px;
                                      z-index: 1;
                                      bottom:0;
                                      background-image: url(images/util/box_planner_0003s_0001_29.png);
                                      background-repeat: no-repeat;
                                      background-size: 500px 213px">
                                    
                                    <div style="float:right; border: 0px solid #999999; 
                                                font-size: 75px; 
                                                margin-top: 21px; 
                                                margin-right: 31px; 
                                                color: rgb(232, 228, 227);                                                 
                                                font-family: 'Trebuchet MS';"
                                                >
                                        9
                                    </div>
                                    <div style="float:right; border: 0px solid #008822; 
                                                font-size: 12px; 
                                                margin-top: 21px; 
                                                margin-right: 75px; 
                                                color: #000000;                                                   
                                                font-family: 'Trebuchet MS'; 

                                                text-align:  right;
                                                ">
                                        <b style="color: rgb(255, 255, 255)">Junio</b>                                        
                                        <div class="ul-planner" style=""> 
                                            <ul>
						<a class="" style="color:#6F0"  href="publicidad/conf4.png" target="black">	
		                                    <u>Conferencia: Complejidad, catástrofe<br>
							 y Sistemas discretos.
						    </u><br>
		                                </a>                                                 
						Conferencista: Ph. D. Carlos Maldonado<br>
                                                Hora: 10:00am - 12:00pm <br>                                             
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div id="prog27" style="float:left;
                                      width:512px; height:150px;  border:0px solid #00FF66; 
                                      margin-left: 16px;
                                      margin-top: -50px;
                                      z-index: 2;
                                      bottom:0;
                                      background-image: url(images/util/box_planner_0004s_0001_29.2.png);
                                      background-repeat: no-repeat;
                                      background-size: 510px 198px">
                                    
                                    <div style="float:left; border: 0px solid #999999; 
                                                font-size: 75px; 
                                                margin-top: 41px; 
                                                margin-left: 17px; 
                                                color: rgb(232, 228, 227);                                            
                                                font-family: 'Trebuchet MS';"
                                                >
                                        28 
                                    </div>
                                    <div style="float:left; border: 0px solid #008822; 
                                                font-size: 12px; 
                                                margin-top: 20px; 
                                                margin-left: 19px; 
                                                color: #000000;                                                   
                                                font-family: 'Trebuchet MS';     
                                                text-align:  left;
                                                ">
                                        <b style="color: rgb(255, 255, 255)"> </br>Octubre</b>                                        
                                        <div class="ul-planner" style=""> 
                                            <ul>
						<a class="" style="color:#6F0"  href="publicidad/conf5.png" target="black">	
		                                    <u>Conferencia: Herramienta para el análisis de sistemas dinámicos<br>
							no lineales unidimensionales y bidimensionales. 
						    </u><br>
		                                </a> 
						Conferencista: César Suárez<br>
                                                Hora: 10:00am - 12:00pm <br> 
                                                Sala de video conferencias  <br> 
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                                </div>
                        </div>                   
                    </div>
                <div style="display:inline-table; clear:both; width:100%; border:0px solid;"></div>
            </div>
<br>
<center>
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
