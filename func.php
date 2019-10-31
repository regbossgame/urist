<?


function trans($str)
{
    $tr = array(
        "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
        "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
        "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
        "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
        "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
        "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
        "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
		"№"=>"Num","+"=>"Plus","&"=>"And"
    );
	$str=strtr($str,$tr);
	
	$str=strtolower($str);
	
//	$str = preg_replace('~[^-a-z0-9_]+~u', '_', $str);
	$str = str_replace('""', '"', $str);
	$str = str_replace('"', '-', $str);
	$str = str_replace("''", "'", $str);
	$str = str_replace("'", '-', $str);
	
	
	$str = str_replace('|', '-', $str);
	$str = str_replace('%', '-', $str);
	$str = str_replace('*', '-', $str);
	$str = str_replace('?', '-', $str);
	$str = str_replace('#', '-', $str);
	$str = str_replace('<', '-', $str);
	$str = str_replace('>', '-', $str);
	$str = str_replace('`', '-', $str);	
	$str = str_replace('@', '-', $str);
	$str = str_replace(':', '-', $str);
	$str = str_replace(';', '-', $str);
	$str = str_replace('^', '-', $str);
	
	
	
	$str = str_replace('  ', '-', $str);
	$str = str_replace('/', '-', $str);
	$str=str_replace("\\", "-", $str);
	
	$str = str_replace(' ', '-', $str);
	//$str = str_replace('.', '-', $str);
	$str = str_replace(',', '-', $str);
	$str = str_replace('(', '-', $str);
	$str = str_replace(')', '-', $str);

	
	$str = str_replace("_-", '_', $str);
	$str = str_replace("-_", '_', $str);
	$str = str_replace("___", '-', $str);
	$str = str_replace("__", '-', $str);
	$str = str_replace("__", '-', $str);
	
	
	$str = str_replace("---", '-', $str);
	$str = str_replace("--", '-', $str);
	$str = str_replace("--", '-', $str);
	$str = str_replace("--", '-', $str);

	

	//$str=preg_match("/^[A-z]+$/ui", $str);
	
    $str = trim($str, "-");
    $str = trim($str);
	
    return $str;
    
}

?>