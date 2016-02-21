<?php
 
// datos para la coneccion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','complejidad');
define('DB_USER','complejidad');
define('DB_PASS','pm8BkXFB');
 
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
 
?>