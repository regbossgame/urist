<br>
<? include "tab1.php"; ?>
<br>
<hr>
<h3>Другие статьи сайта</h3>
<br>
<ul class='ula2'>
<?

include "info_src.php";

for($i=0;$i<count($mas1);$i++){
echo "<li><a href='".$mas2[$i]."'>".$mas1[$i]."</a></li>
";
}
?>

</ul>