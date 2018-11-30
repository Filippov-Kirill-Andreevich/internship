<?
function isCorrect($str){
//Виды открытх скобок	
$arOpenScop = 	['(', '{', '[', '<', '/', '|'];
//Закрытые скобки
$arCloseScop = 	[')', '}', ']', '>', '/', '|'];
	
	//Переход по символам в строке
	foreach (str_split($str) as $char) {
		//Если найдена открытая скоба
		if(in_array($char, $arOpenScop))
			$open .= $char;
		
		//Если найдена закрытая скоба
		if(in_array($char, $arCloseScop))
			if(isset($open)) //Если открытая скоба есть
				if(array_search($char, $arCloseScop) === array_search(substr($open, -1),$arOpenScop)) //Если тип закрытой скобы совпадает с открытой
					if(count($open) === 1) unset($open); //Если открытая скоба одна, то удаляем переменную с открытыми скобами 
					else $open = substr($open, -1); //Иначе удаляем последнюю открытую скобу
			else return false;
	}
	return !isset($open)?true:false;
}
?>