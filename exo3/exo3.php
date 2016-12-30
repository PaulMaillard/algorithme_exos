<?php
$word = $argv[1];
$char = $argv[2];
$result = 0;
$i = 0;
while($i < strlen($word)){
	if($word[$i] == $char){
		$result++;
	}
$i++;
}
echo "Le nombre de " .$char. " est : " .$result."\r"."\n";
?>
