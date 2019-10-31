<?

$str=$_GET['str'];
if ($str==""){$str="main";}

include "conf.php";


include "top.php";

if (!file_exists($str.".php")){
	$t19=file_get_contents("none.php");
	echo $t19;
	file_put_contents($str.".php",$t19);
}else{
include $str.".php";
}

include "down.php";

?>