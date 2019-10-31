<?
include "info_src.php";


?>

<div style='width:100%;'>
<h1>Справочная информация</h1><br>
<img src='images/cnt/partners-kat.jpg' width=100% class='instart' onload='start(this,0);'/>

</div>
<div class='content'>
	<h1 style="text-align: center;">Справочная информация</h1>
<p style="text-align: justify;">На странице «Справка» Вы можете найти контактную информацию всех государственных и муниципальных органов города Таганрога, подразделений правоохранительных органов и судебной системы Ростовской области.</p>


<?
for($i=0;$i<count($mas1);$i++){
	echo "<a href='".$mas2[$i]."' title='".$mas1[$i]."'><p><strong>".$mas1[$i]."</strong><br>
	<img src='cont/inf/".$i.".jpg' width=200px alt='".$mas1[$i]."'></p></a>
	<br>";
}

?>



</div>


<?
/*


<p style="text-align: left;"><b>Арбитражные суды:</b></p>
<p><img class="ima_l" src="cont/arbitragniy-sud-rostovskoy-oblasti-2.jpg"  alt="арбитражный суд ростовской области" width="165" height="100" /></p>

<p><a title="Арбитражный суд Ростовской области" href="/?str=arbitrazhnyj-sud-rostovskoj-oblasti">Арбитражный суд Ростовской области</a></p>
<p>&nbsp;</p>
<p><img class="ima_l" src="cont/15-apellyacionniy-sud-2.jpg" alt="пятнадцатый апелляционный арбитражный суд" width="165" height="100" /></p>

<p><a title="Пятнадцатый арбитражный апелляционный суд" href="/?str=pyatnadcatyj-arbitrazhnyj-apellyacionnyj-sud" tppabs="http://advokati-taganroga.ru/pyatnadcatyj-arbitrazhnyj-apellyacionnyj-sud.html">15 апелляционный арбитражный суд</a></p>
<p>&nbsp;</p>
<p style="text-align: left;"><b>Суды общей юрисдикции:</b></p>
<p><img class="ima_l" src="cont/mirovie-sudji-taganroga-2.jpg"  alt="мировые судьи в таганроге" width="165" height="100" /></p>

<p><a title="Мировые судьи города Таганрога" href="/?str=mirovye-sudi-goroda-taganroga" tppabs="http://advokati-taganroga.ru/mirovye-sudi-goroda-taganroga.html">Мировые судьи в Таганроге</a></p>
<p>&nbsp;</p>
<p><img class="ima_l" src="cont/taganrogskiy-gorodskoy-sud-2.jpg" alt="таганрогский городской суд" width="165" height="100" /></p>

<p><a title="Таганрогский городской суд" href="/?str=taganrogskij-gorodskoj-sud" tppabs="http://advokati-taganroga.ru/taganrogskij-gorodskoj-sud.html">Таганрогский городской суд</a></p>
<p>&nbsp;</p>
<p style="text-align: left;"><b>Судебные приставы:</b></p>
<p><img class="ima_l" src="cont/sudebnie-pristavi-v-taganroge-2.jpg"  alt="судебные приставы в таганроге" width="165" height="100" /></p>

<p><a title="Судебные приставы города Таганрога" href="/?str=sudebnye-pristavy-goroda-taganroga" tppabs="http://advokati-taganroga.ru/sudebnye-pristavy-goroda-taganroga.html">Служба судебных приставов в Таганроге</a></p>
<p>&nbsp;</p>
<p style="text-align: left;"><b>Правоохранительные органы:</b></p>
<p><img class="ima_l" src="cont/policiya-taganroga-2.jpg" alt="отделы полиции в таганроге" width="165" height="100" /></p>

<p><a title="Отделы полиции в Таганроге" href="/?str=otdely-policii-v-taganroge" tppabs="http://advokati-taganroga.ru/otdely-policii-v-taganroge.html">Отделы полиции в Таганроге</a></p>
<p>&nbsp;</p>
<p><img class="ima_l" src="cont/prokuratura-taganroga-2.jpg" alt="прокуратура таганрога " width="165" height="100" /></p>

<p><a title="Прокуратура города Таганрога" href="/?str=prokuratura-goroda-taganroga" tppabs="http://advokati-taganroga.ru/prokuratura-goroda-taganroga.html">Прокуратура в Таганроге</a></p>
<p>&nbsp;</p>
<p style="text-align: left;"><b>ИФНС:</b></p>
<p><img class="ima_l" src="cont/ifns-taganrog-2.jpg" alt="налоговая служба в таганроге" width="165" height="100" /></p>

<p><a title="ИФНС России по г. Таганрогу" href="/?str=ifns-rossii-po-g-taganrogu" tppabs="http://advokati-taganroga.ru/ifns-rossii-po-g-taganrogu.html">Налоговая инспекция в Таганроге</a></p>
<p>&nbsp;</p>
<p style="text-align: left;"><b>Отделение регистрационной службы:</b></p>
<p><img class="ima_l" src="cont/taganrogskiy-otdel-rosreestra-2.jpg" alt="таганрогский отдел росреестра" width="165" height="100" /></p>

<p><a title="Таганрогский отдел Росреестра" href="/?str=taganrogskij-otdel-rosreestra" tppabs="http://advokati-taganroga.ru/taganrogskij-otdel-rosreestra.html">Росреестр в Таганроге</a></p>
<p>&nbsp;</p>
<p style="text-align: left;"><b>Таможня:</b></p>
<p><img class="ima_l" src="cont/tamognya-v-taganroge-2.jpg" alt="таганрогская таможня" width="165" height="100" /></p>

<p><a title="Таможня в городе Таганроге" href="/?str=tamozhnya-v-gorode-taganroge" tppabs="http://advokati-taganroga.ru/tamozhnya-v-gorode-taganroge.html">Таможня в Таганроге</a></p>
		

*/

?>