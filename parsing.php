<?php
	function Parse($p1, $p2, $p3) {
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));


}	
$String = file_get_contents('http://obninsksite.ru');
echo Parse($String, '<div class="unique item">', '</div>');

/*
	$urls = array('http://klops.ru/', 'http://rp5.ru/');
	foreach($urls as $urlsItem){	
		$out .= file_get_contents($urlsItem);	//и добавляем содержание каждой страницы в строку
	}
	
	$dom = new DOMDocument;	//создаем объект
	$dom->loadHTML($out);	//загружаем контент
	$node = $dom->getElementsByTagName('a');   //берем все теги a
	for ($i = 0; $i < $node->length; $i++) {
		$hrefText[] = $node->item($i)->getAttribute('href');	//вытаскиваем из тега атрибут href
	}
	foreach($hrefText as $hrefTextItem){	//избавляемся от ссылок с пустым атрибутом href
		if($hrefTextItem!=''){
			$clearHrefs[]=$hrefTextItem;
		}
	}
	$clearHrefs = array_unique($clearHrefs);	//избавляемся от одинаковых ссылок
	print_r($clearHrefs);
	*/
	?>