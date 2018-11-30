<?
function isCorrect($str){
	
$arOpen = ['(', '{', '['];
$arClose = [')', '}', ']'];
	
	foreach (str_split($str) as $char) {
		if(in_array($char, $arOpen)) 
			if(!isset($open)) $open = array_search($char, $arOpen);
			else return false;
			
		if(in_array($char, $arClose))
			if(isset($open))
				if(array_search($char, $arClose) === $open) unset($open);
				else return false;
			else return false;
	}
	return !isset($open)?true:false;
}

var_dump(isCorrect('{(})[]') === false);
?>