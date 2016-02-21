<?php
class Connect
{
    public static function conn()
    {
        $conexion = mysql_connect("localhost","complejidad","pm8BkXFB");
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db("test", $conexion); 
        return $conexion;
        /*
        $conexion = mysql_connect("localhost","root","ygmno");
        mysql_set_charset ("utf8");
        mysql_select_db("complejidad_test", $conexion); 
        return $conexion;
        */
    }
}
?>