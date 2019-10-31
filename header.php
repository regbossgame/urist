<img src='images/msg-me.png' id='msgi' title='Напишите нашим юристам вопрос или обращение!' class='msgi' onclick='showmod(1,1);'/>
<div class='back1' id='back1' onclick='showmod(1,0);'></div>
<div class='modal' id='mod1'>
<div class='return2'>
<div style='float:right;cursor:pointer;' onclick='showmod(1,0);' title='Закрыть'>X</div>
<h2>Напишите юристу</h2>
<? include "return.php"; ?>
</div>
</div>

<div class='header'>
		<table border=0 class='content' style='margin-top:5px;white-space:nowrap;'>
			<tr valign='top'>
			<td>
			<a href='/'>
			<img src='images/logo.png?v1.1' height=86px title='ООО Феникс - На главную' class='zoom3' style='margin:1px;border:0px solid #FF0000;float:left;'>
			</a>

			</td>
<td align='center' width=300px>

	<span style='color:#F5F5DC;'>Юридическая фирма</span>
	<h1 style="color:#eb9711;font-size:18pt;">ООО &#171;Феникс&#187;</h1>
	<?/*<div style='width:50px;height:23px;'></div>*/?>
					
					<h2 style='color:#FFFFFF;'><img src='images/tru.png' onclick='showmod(1,1);' class='tru' style='height:22px;'/><? echo $mnum; ?></h2>
					<h2 style='color:#FFFFFF;'><img src='images/tru.png' onclick='showmod(1,1);' class='tru' style='height:22px;'/><? echo $mnum2; ?></h2>
					
			


				</td>
<? /*
				<td>
				
				<ul>
					<li><a title='Семейные споры' href='/?str=semeyniye-spory'>Семейные споры;</a></li>
					<li><a title='Жилищные споры' href='/?str=zhilishchnye-spory'>Жилищные споры;</a></li>
					<li><a title='Споры по ДТП, по ОСАГО и КАСКО (Автоюрист)' href='/?str=avtourist'>Автоюрист - ДТП,<br> ОСАГО, КАСКО;</a></li>
				</ul>
				
				</td>
							
				<td>
				<ul>
					<li><a title='Помощь должникам по кредитам' href='/?str=pomoshch-dolzhnikam-po-kreditam'>Помощь должникам по кредитам;</a></li>
					<li><a title='Защита прав потребителей' href='/?str=zashchita-prav-potrebitelei'>Защита прав потребителей;</a></li>
					<li><a title='Арбитражные споры и сопровождение бизнеса' href='/?str=arbitrazhnye-spory'>Арбитражные споры<br>и сопровождение бизнеса;</a></li>
				</ul>
				
				</td>
				*/
				?>
				<td align='right'>
				
				<? include "men.php"; ?>
				
					
			
				</td>
			</tr>
			<tr>
			<td colspan=4>
			
			</td>
			<td colspan=1>
			
			</td>
			</tr>
			</table>
							

</div>

<?
/*
<div style='width:300px;height:15px;'></div>
				<h3>Адрес: <? echo $m_adr; ?></h3>
		
*/
?>