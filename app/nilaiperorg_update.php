<?php 
session_start();
include 'config.php';
$ni=$_POST['ni'];
$no=$_POST['no'];
$thn=$_POST['thn'];
$smt=$_POST['smt'];
$mtr=$_POST['mtr'];
$na=$_POST['na'];
$desk=addslashes($_POST['desk']);

mysqli_query($GLOBALS["___mysqli_ston"], "update nilai set angka='$na', desk='$desk' where no='$no'");
header("Location:nilaiperorg?santri=$ni&smt=$smt&thn=$thn");
 ?>
