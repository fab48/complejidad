jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingslider-1").amazingslider({
        jsfolder:jsFolder,
        width:950,
        height:320,
        skinsfoldername:"",
        loadimageondemand:false,
        isresponsive:false,
        autoplayvideo:false,
        pauseonmouseover:false,
        addmargin:true,
        randomplay:false,
        slideinterval:12000,
        enabletouchswipe:true,
        transitiononfirstslide:false,
        loop:0,
        autoplay:true,
        navplayvideoimage:"play-32-32-0.png",
        navpreviewheight:60,
        timerheight:2,
        shownumbering:false,
        skin:"Classic",
        addgooglefonts:false,
        navshowplaypause:true,
        navshowplayvideo:false,
        navshowplaypausestandalonemarginx:8,
        navshowplaypausestandalonemarginy:8,
        navbuttonradius:0,
        navthumbnavigationarrowimageheight:32,
        navmarginy:16,
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        googlefonts:"Inder",
        textpositionmarginright:24,
        bordercolor:"#ffffff",
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        navcolor:"#999999",
        arrowwidth:32,
        texteffecteasing:"easeOutCubic",
        texteffect:"fade,slide",
        navspacing:8,
        playvideoimage:"playvideo-64-64-0.png",
        ribbonimage:"ribbon_topleft-0.png",
        navwidth:24,
        showribbon:false,
        arrowimage:"arrows-32-32-0.png",
        timeropacity:0.6,
        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",
        navshowplaypausestandalone:false,
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"topleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        arrowstyle:"mouseover",
        navthumbtitleheight:20,
        textpositionmargintop:24,
        navswitchonmouseover:false,
        navarrowimage:"navarrows-28-28-0.png",
        arrowtop:50,
        textstyle:"none",
        playvideoimageheight:64,
        navfonthighlightcolor:"#666666",
        showbackgroundimage:false,
        navpreviewborder:4,
        navopacity:0.8,
        shadowcolor:"#aaaaaa",
        navbuttonshowbgimage:true,
        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",
        textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);",
        navdirection:"horizontal",
        navborder:4,
        bottomshadowimagewidth:110,
        showtimer:true,
        navradius:0,
        navshowpreview:false,
        navpreviewarrowheight:8,
        navmarginx:16,
        navfeaturedarrowimage:"featuredarrow-16-8-0.png",
        navfeaturedarrowimageheight:8,
        navstyle:"bullets",
        textpositionmarginleft:24,
        descriptioncss:"display:block; position:relative; margin-top:4px; font:14px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;",
        navplaypauseimage:"navplaypause-28-28-0.png",
        backgroundimagetop:-10,
        timercolor:"#ffffff",
        numberingformat:"%NUM/%TOTAL ",
        navfontsize:12,
        navhighlightcolor:"#333333",
        navimage:"bullet-24-24-6.png",
        navheight:24,
        navshowplaypausestandaloneautohide:false,
        navbuttoncolor:"#999999",
        navshowarrow:true,
        navshowfeaturedarrow:false,
        titlecss:"display:block; position:relative; font: 16px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;",
        ribbonimagey:0,
        ribbonimagex:0,
        navshowplaypausestandaloneposition:"bottomright",
        shadowsize:5,
        arrowhideonmouseleave:1000,
        navshowplaypausestandalonewidth:28,
        navshowplaypausestandaloneheight:28,
        backgroundimagewidth:120,
        textautohide:true,
        navthumbtitlewidth:120,
        navpreviewposition:"top",
        playvideoimagewidth:64,
        arrowheight:32,
        arrowmargin:8,
        texteffectduration:1000,
        bottomshadowimage:"bottomshadow-110-95-3.png",
        border:0,
        timerposition:"bottom",
        navfontcolor:"#333333",
        navthumbnavigationstyle:"arrow",
        borderradius:0,
        navbuttonhighlightcolor:"#333333",
        textpositionstatic:"bottom",
        navthumbstyle:"imageonly",
        textcss:"display:block; padding:12px; text-align:left;",
        navbordercolor:"#ffffff",
        navpreviewarrowimage:"previewarrow-16-8-0.png",
        showbottomshadow:true,
        textpositionmarginstatic:0,
        backgroundimage:"",
        navposition:"bottom",
        navpreviewarrowwidth:16,
        bottomshadowimagetop:95,
        textpositiondynamic:"bottomleft",
        navshowbuttons:false,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        ribbonmarginy:0,
        ribbonmarginx:0,
        blocks: {
            columncount:5,
            checked:true,
            rowcount:5,
            effects:"topleft,bottomright,top,bottom,random",
            duration:2500,
            easing:"easeOutCubic"
        },
        transition:"blocks"
    });
});
