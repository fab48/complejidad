// ===================================================================
// Author: GC
// ===================================================================
        $(document).ready(function() {

            // datepicker            
            $( "#formDate" ).datepicker({
                inline: true,
                changeMonth: true,
                changeYear: true,
                yearRange:  "1890:2013",
                showAnim:   "slide",
                dateFormat: "yy-mm-dd",
                defaultDate: "-4m -25y"
            });
            
            // custom validation method to make sure the date is in mm/dd/yyyy format 
            jQuery.validator.addMethod(
                "usaDate",
                function(value, element) {
                    console.log(value);
                    var date = getDateFromFormat(value,'yyyy-mm-dd');
                    console.log(date);
                    if (date == 0) { 
                        return false; 
                    }
                    return true;
                },
                "Por favor ingresar una fecha en formato yyyy-mm-dd"
            );
            
            
            var validator = $("#samplecode").validate({
            
                // JDR: make sure we show/hide both blocks
                errorContainer: "#errorblock-div1, #errorblock-div2",
                
                // JDR: put all error messages in a UL
                errorLabelContainer: "#errorblock-div2 ul",
                
                // JDR: wrap all error messages in an LI tag
                wrapper: "li",
              
                rules: {

                    // Nombre - apellido
                    formName: "required",
                    formLast: "required",

                    // Tipo Identificación
                    formTypeId: "required",

                    // Número de Id
                    formNroId: "required",

                    // Email
                    formEmail: {
                      required: true,
                      email: true
                    },
                           

                    // Fecha Nacimiento
                    /*
                    formDate : {
                      required: true,
                      usaDate : true
                    },
                    */  

                    // Genero
                    formGender: "required",

                    // Ciudad
                    //formCity: "required",
                                  
                    
                },
                
                //custom error messages
                messages: {
                    formGender:{
                        required: "Seleccione su genero."
                        },
                    formName:{
                        required: "Escriba sus nombres."
                        },	
                    formLast:{
                        required: "Escriba sus apellidos."
                        },
                    formNroId:{
                        required: "Escriba su identificación."
                        },
                    formEmail: {
                        required: "Escriba una dirección de correo electrónico",
                        email: "Email no válido."
                    }
                },
                
                submitHandler: function(){
                    
                    var p=[];
                        $('input.cb').each( function() {
                                if($(this).attr('checked')) {
                                        p.push($(this).attr('rel'));
                                }
                        } );
                    
                    var vUrl = "post.php?"+$("#samplecode").serialize();
                    
                    $.post("post.php?"+$("#samplecode").serialize(), {
                               }, function(response){
                                 
                                    if(response==1){                                        
                                        var template = " <p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span><strong>" + response +"</strong></p>";
                                        $("#ui-info-success-txt").html(template); 
                                    }
                                    else{
                                        var template = " <p style=\"margin-top:15px;\"><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span><b>" + response +"</b></p>";
                                        $("#ui-info-success-txt").html(template);
                                        $("#ui-info-success").fadeIn();
                                        successEvents('#ui-info-success');
                                        $(".form-clear").val("");
                                        $("input[type=checkbox]:checked").removeAttr('checked');
                                    }
                                }
                            );                          
                }
            });
            
            
           
            
            // JDR: this sets up a hover effect for all buttons
            var abuttonglow = $(".ui-button:not(.ui-state-disabled), #icons li")
                .hover(
                    function() {
                        $(this).addClass("ui-state-hover");
                    },
                    function() {
                        $(this).removeClass("ui-state-hover");
                    }
                ).mousedown(function() {
                            $(this).addClass("ui-state-active");
                    })
                 .mouseup(function() {
                    $(this).removeClass("ui-state-active");
                    });	
                    
            var buttonNav = $(".mnInterna")
                .hover(
                    function() {
                        $(this).addClass("nav-hover");
                    },
                    function() {
                        $(this).removeClass("nav-hover");
                    }
                ).mousedown(function() {
                            $(this).addClass("nav-active");
                    })
                 .mouseup(function() {
                    $(this).removeClass("nav-active");
                    });	
            
            var buttonNavHome = $(".navHome")
                .hover(
                    function() {
                        $(this).addClass("navHome-hover");
                    },
                    function() {
                        $(this).removeClass("navHome-hover");
                    }
                ).mousedown(function() {
                            $(this).addClass("navHome-active");
                    })
                 .mouseup(function() {
                    $(this).removeClass("navHome-active");
                    });
            
            $('#formTypeId').selectize({
               // create: true,
                sortField: 'text'
            });
            
            $(".amazingslider-watermark-0").css("display","none"); 
            
            
            $(".mnInterna").click(function(){
                    // se obtiene la url del enlace que contiene y se lanza
                    window.location=$(this).find("a").attr("href"); 
                    return false;
                });
            
      
        });
        
        

        function successEvents(msg) {

            // JDR: microseconds to show return message block
            var defaultmessagedisplay = 10000;
            
            // JDR: fade in our return message block
            $(msg).fadeIn('slow');

            // JDR: remove return message block
            setTimeout(function() { $(msg).fadeOut('slow'); }, defaultmessagedisplay);
        };
        
        
        function slideSwitch() {
            var $active = $('#slideshow IMG.active');

            if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

            // use this to pull the images in the order they appear in the markup
            var $next =  $active.next().length ? $active.next()
                : $('#slideshow IMG:first');

            // uncomment the 3 lines below to pull the images in random order
            
            var $sibs  = $active.siblings();
            var rndNum = Math.floor(Math.random() * $sibs.length );
            var $next  = $( $sibs[ rndNum ] );


            $active.addClass('last-active');

            $next.css({opacity: 0.0})
                .addClass('active')
                .animate({opacity: 1.0}, 5000, function() {
                    $active.removeClass('active last-active');
                });
        }

        $(function() {
            setInterval( "slideSwitch()", 18000 );
        });
        
        function clearCurrentForm(p_Form){
            $(".form-clear").val("");
        };
        
        
        