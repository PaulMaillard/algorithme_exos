<?php
// count letter
// by fflachet
// beweb


$word = "antitt";
$carac = "t";
$result = 0;
$i = 0;

	
while($i < strlen($word))
{
	if($word[$i] == $carac)
	{
		$result++;
	}
$i++;
}
echo "le nombre de caractereRecherche est : $result\n";
?>
