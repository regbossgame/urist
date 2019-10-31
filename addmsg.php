<?

include "conf.php";

$name=$_POST['name'];
$tel=$_POST['tel'];
$com=$_POST['com'];

$code=$_POST['code'];

if (strlen($code)==5){

if (strlen($tel)<5){HEADER('LOCATION: /?str=msg&msg=3';}else{

$to  = $adm_mail;//"wirtbox@mail.ru";//wirtbox@mail.ru


$subject = "ООО ФЕНИКС Новое обращение!";


$message = ' 
<html> 
    <head> 
        <title>ООО ФЕНИКС Новое обращение</title> 
    </head> 
    <body> 
	<h2>Новое обращение</h2>
        <p>Имя: '.$name.'</p> 
        <p>Контакты: '.$tel.'</p> 
        <p>Комментарий: '.$com.'</p> 
    </body> 
</html>'; 

//Content-type: text/html; charset=\"windows-1251\" \r\n Reply-To: $from \r\n", "-f$from

$headers  = 'Content-type: text/html; charset="utf-8" \r\n ';
$headers .= 'From: $to \r\n';
$headers .= 'Reply-To: $to \r\n';


$r1=mail($to, $subject, $message, $headers);

HEADER('LOCATION: /?str=msg&msg='.($r1*1));
}
}else{HEADER('LOCATION: /?str=msg&msg=2';}
?>

