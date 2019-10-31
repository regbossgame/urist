<table border=0 style='white-space: nowrap;' width=800px><tr valign='top' align='center' nowrap>

<?


for($i=0;$i<count($tmen);$i++){
$tt="";
if ($str==$link[$i]){$tt="a";}
$tt2="/?str=".$link[$i];
if ($link[$i]=='main'){$tt2="/";}
echo "
<td>
<a href='".$tt2."' title='".$tit[$link[$i]]."'>
<div class='mbtn".$tt."'>
<h3>
<img src='images/men/".$link[$i].".png' height=28px alt='".$tmen[$i]."'/>
<br>
".$tmen[$i]."
</h3>
</div>
</a>
</td>";
if ($i!=(count($tmen)-1)){
echo "<td width=10px>
</td>
";
}

}

echo "</tr><tr>

<td colspan=6>

</td>
<td colspan=".((count($tmen)*2)-7).">
<div style='width:300px;height:4px;'></div>
				<h3 style='text-align:right;color:#eb9711;'>Адрес: ".$m_adr."
				</td></tr></table>";



?>

