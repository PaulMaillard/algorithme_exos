<?php
//exercices on string
//by fflachet
//beweb

function palindrome($word)
{
	$flag = false;
	$i = 0;
	$j = strlen($word)-1;
	$argv[1] = $word;

	echo "$word\n";

	while ($i < strlen($word)) 
	{	
		if($word[$i] == $word[$j])
		{
			$j--;
			$i++;
			$flag = true;
		}
		else
		{
			$flag = false;
			break;
		}
	}
	if($flag == true)
		echo "ce mot est un palindrome\n";
	else
		echo "ce mot n'est pas un palindrome\n";
}


function countLetter($word)
{
	$i = 0;
	$nbLetter = 0;

	echo "$word\n";

	while($i < strlen($word))
	{
		if(ctype_alpha($word[$i]))
		{
			$nbLetter++;
			$i++;
		}
		else
		{
			$i++;
		}
	}
	echo "nombre de lettres alpha :$nbLetter\n";

}

function main($argv)
{
	$word = $argv[1];
	switch ($argv[2])
	{
		case '1':
			palindrome($word);
			break;
		case '2':
			countLetter($word);
			break;
		case '3';
			echo "Soon...\n";
			break;
		case '4':
			echo "Soon...\n";
			break;
		default:
			echo "Try again\n";
			break;
	} 
}

main($argv);
?>