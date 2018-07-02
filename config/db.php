<?php 

/*
MySQL-DB: 
Login: 

*/

/* -------------- local host -----------------
$link1 = mysql_connect ("localhost", "root", "")
        or die ("No se puede conectar a MySQL ");

mysql_select_db ("750") ;

//

	$link2 = mysql_connect ("localhost", "root", "")
        or die ("No se puede conectar a MySQL ");

mysql_select_db ("750") ;
*/
// ---------------- NNP ------------------------

$link1 = mysql_connect ("localhost", "adminroot", "")
        or die ("No se puede conectar a MySQL ");

mysql_select_db("DailyWriterApp");



//

$link2 = mysql_connect ("localhost", "adminroot", "")
        or die ("No se puede conectar a MySQL ");

mysql_select_db("DailyWriterApp");



?>
