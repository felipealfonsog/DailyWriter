<?php 

if (empty($_POST['qs']) OR empty($_POST['id2'])) {
	echo "You must select a work.";
	echo " <a href=\"javascript:history.go(-1);\">back</a> ";
	} elseif ($_POST['qs']== true && $_POST['id2']== true) {
	$g = $_POST['qs'];
	$f = $_POST['id2'];

$fecha = date("D M j G:i:s Y"); 
// $fecha = date("D M j Y"); 
include("../config/db.php");
$sql2='UPDATE  `reg_750` SET  `data` ="'.$g.'"  WHERE  `reg_750`.`id` ="'.$f.'";';
$rs2 = mysql_query ($sql2,$link2) or die ("<br><b>Error!. ".$sql2."</b>");

// echo $sql2;
 // echo " <a href=\"javascript:history.go(-1);\">back</a> ";
header("Location: ../?id=".$f.""); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
 exit;
}


?>
