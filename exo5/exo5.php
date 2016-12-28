<?php
//exercices on string
//by fflachet
//beweb
function palindrome($word)
{
	$palindrome = false;
	$i = 0;
	$j = strlen($word)-1;

	echo "$word\n";

	while ($i < strlen($word)-1)
	{	
		if($word[$i] == $word[$j])
		{
			$j--;
			$i++;
			$palindrome = true;
		}
		else
		{
			$palindrome = false;
			break;
		}
	}
	if($palindrome == true)
		echo "ce mot est un palindrome\n";
	else
		echo "ce mot n'est pas un palindrome\n";
}

palindrome("beweb");

function countLetter($word)
	i = 0;
	nbLetter = 0;
?>