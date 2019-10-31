<?
session_start();
$width = 160;				//������ �����������
$height = 36;				//������ �����������
$font_size = 12;   			//������ ������
$let_amount = 5;			//���������� ��������, ������� ����� �������
$fon_let_amount = 250;		//���������� �������� �� ����
$font = "res/font3.ttf";	//���� � ������

//����� ��������
$letters = array("1","2","3","4","5","6","7","8","9","2","5","7","4","4","4","2","5","4","7");
$letters2 = array("*",".","/","*","&","@","@","!","#","#","^","%","$","$",".",",",".",",",".",">","<","k","x","+","*","}{");

//�����
$colors = array("21","78","82","63","54","90","15","37");	
 
$src = imagecreatetruecolor($width,$height);	//������� �����������				
$fon = imagecolorallocate($src,255,255,255);	//������� ���
imagefill($src,0,0,$fon);						//�������� ����������� �����
 
for($i=0;$i < $fon_let_amount;$i++)			//��������� �� ��� �������
{
	//��������� ����
   	$color = imagecolorallocatealpha($src,rand(130,235),rand(130,245),rand(110,235),rand(50,99));	
   	//��������� ������
   	$letter = $letters2[rand(0,sizeof($letters2)-1)];	
	//��������� ������								
   	$size = rand($font_size/2.1,$font_size*1.5);											
   	imagettftext($src,$size,rand(0,360),
	   	rand(-5,$width),
		rand(-5,$height),$color,$font,$letter);
}
 
for($i=0;$i < $let_amount;$i++)		//�� �� ����� ��� �������� ����
{
   $color = imagecolorallocatealpha($src,$colors[rand(0,sizeof($colors)-1)],
   		$colors[rand(0,sizeof($colors)-1)],
   		$colors[rand(0,sizeof($colors)-1)],rand(38,62)); 
   $letter = $letters[rand(0,sizeof($letters)-1)];
   $size = rand($font_size*2-3,$font_size*2+2);
   $x = ($i*2.6+1)*$font_size+rand(1,8)-8;		//���� ������� ������� ��������� ��������
   $y = (($height*2)/3) + rand(3,8);
   $cod[] = $letter;   						//���������� ���
   imagettftext($src,$size,rand(-15,15),$x,$y,$color,$font,$letter);
}
 
$cod = implode("",$cod);					//��������� ��� � ������
$_SESSION["ff"]=$cod;
header ("Content-type: image/png"); 		//������� ������� ��������
imagepng($src); 
?>