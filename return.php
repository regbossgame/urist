<?
$t6="
<form action='addmsg.php' method='POST'>
<input type='text' maxlength=50 name='name' placeholder='Ваше имя'/><br>
<input type='text' maxlength=50 name='tel' placeholder='Ваш телефон или E-mail  *' title='Как с Вами связаться? Обязательное поле!' onchange='if (this.value.length<5){this.style=\"border:1px solid #FF0000;\"}else{this.style=\"border:1px solid #666666;\"}'/><br>
<textarea name='com' maxlength=50 placeholder='Суть обращения, кратко (необязательно)'></textarea><br>
<img src=\"genimg.php?rnd=".rand(10000,99999)."\" title='Нажмите если не видно кода' onclick=\"this.src='genimg.php?rnd='+Math.random();\" width=160x><br>
<input type='text' name='code' maxlength=50 placeholder='Введите код с картинки (5 цифр) *' width=100px/><br>
<input type='submit' value='ОТПРАВИТЬ'/>
</form>";

if ($rty==2){$t6="
<form action='addmsg.php' method='POST'>
<input type='text' maxlength=50 name='name' placeholder='Ваше имя (необязательно)'/><br>
<input type='hidden' maxlength=50 name='tel' value='Это отзыв клиента'/>
<textarea name='com' maxlength=50 placeholder='Ваш отзыв/ предложения/ пожелания'></textarea><br>
<img src=\"genimg.php?rnd=".rand(10000,99999)."\" title='Нажмите если не видно кода' onclick=\"this.src='genimg.php?rnd='+Math.random();\" width=160x><br>
<input type='text' name='code' maxlength=50 placeholder='Введите код с картинки (5 цифр) *' width=100px/><br>
<input type='submit' value='ОТПРАВИТЬ'/>
</form>
";}

echo $t6;
?>