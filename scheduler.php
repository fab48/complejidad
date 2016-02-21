<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
    <link
        href="resources/scripts/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.css"
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
        type="text/javascript"></script>
    
    <link rel='stylesheet' href='resources/themes/calendar/theme.css' />
    <link rel='stylesheet' href='resources/themes/calendar/fullcalendar.css'  />
    <link rel='stylesheet' href='resources/themes/calendar/fullcalendar.print.css'  media='print' />
    <script src='resources/scripts/calendar/fullcalendar.min.js' type="text/javascript"></script>
    
    <style>   
        #loading {
            position: absolute;
            top: 5px;
            right: 5px;
		}
        #calendar {
            width: 900px;
            margin: 0 auto;
        }
        .fc-event-inner{
            overflow:hidden;
        }
        .fc-event-title{
            font-weight: bold;
        }        
        .fc-event-auth{
            font-weight: normal;
            font-size: 10px;
            padding-left: 5px;
        }
        .fc-event-auth-d{
            font-weight: normal;
            font-style: italic;
            font-size: 10px;
        }
    </style>
    
    <script>
        $(document).ready(function() {
            
            $("#header-title").html("Programación");
            
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
           
            $('#calendar').fullCalendar({
                theme: true,
                month: '07',
                date:  '26',
                defaultView: 'agendaWeek',            
                firstHour: '6',
                allDayText:    'Universidades',
                allDayDefault: false,
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                dayNamesShort: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                titleFormat:{
                    month: 'MMMM yyyy',                             // September 2009
                    week: "MMMM d[ yyyy]{ '&#8212;'[ MMMM] d ' de ' yyyy}", // Sep 7 - 13 2009
                    day: 'dddd, MMM d, yyyy'                  // Tuesday, Sep 8, 2009
                },
                buttonText: {
                    prev:     '&lsaquo;', // <
                    next:     '&rsaquo;', // >
                    prevYear: '&laquo;',  // <<
                    nextYear: '&raquo;',  // >>
                    today:    'Hoy',
                    month:    'Mes',
                    week:     'Semana',
                    day:      'Día'
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: false,
                events: "json-events.php",
                loading: function(bool) {
                    if (bool) $('#loading').show();
                    else $('#loading').hide();
                },
                eventRender: function(event, element) {
                    //alert(element.find(".fc-event-inner").html());
                    //var t_theme = "<b>" + event.description +"</b>";
                    var t_theme = event.description
                    $( t_theme ).appendTo( element.find(".fc-event-inner") );
                    
                },
                dayClick: function(date, allDay, jsEvent, view) {
                    $('#calendar').fullCalendar( 'changeView', 'agendaDay' );
                    $('#calendar').fullCalendar( 'gotoDate', date.getFullYear(), date.getMonth(),  date.getDate() );
                },
                eventClick: function(calEvent, jsEvent, view) {                    
                    $('#calendar').fullCalendar( 'changeView', 'agendaDay' );
                    $('#calendar').fullCalendar( 'gotoDate', (calEvent.start).getFullYear(), (calEvent.start).getMonth(),  (calEvent.start).getDate() );
                },
                eventMouseover: function(calEvent, jsEvent, view) {
                    /*   
                    alert('Event: ' + calEvent.title);
                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                    alert('View: ' + view.name);

                    // change the border color just for fun
                    $(this).css('border-color', 'red');
                    */
                    $(this).css('cursor', 'pointer');
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
                
                    
            <!-- Inicio Contenido//-->
            <div id="contenidoInt" style="padding:30px 0 30px 0; 
                                          width:1040px;                                           
                                          height: auto !important;
                                          border:0px solid #00FF66; 
                                          background-color:#FFFFFF; ">
                <div id='loading' style='display:none'>loading...</div>
                <div id='calendar'></div>
            </div> <!-- Cierre Contenido//-->	
            
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