<?php 

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$find=strlen($string);


echo "le dictionnaire contient ".$find.' mots.';
$val=0;
foreach ($dico as $key => $value) {
if(strlen($value)===15){
	$val++;
	}	
}
	echo "le dictionnaire contient ".strval($val).' mots qui font exactement 15 caractères .';


