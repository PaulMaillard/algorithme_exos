<?php
//exercices on string
//functions by fflachet
//user interfacte by Paul Maillard
//beweb

function palindrome($text)
{
	$flag = false;
	$i = 0;
	$j = strlen($text)-1;
	while ($i < strlen($text))
	{
		if($text[$i] == $text[$j])
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
		echo("This text is a palindrome.\n\n");
	else
		echo("This text is not a palindrome.\n\n");
}

function countLetter($text)
{
	$i = 0;
	$nbLetter = 0;
	while($i < strlen($text))
	{
		if(ctype_alpha($text[$i]))
		{
			$nbLetter++;
			$i++;
		}
		else
		{
			$i++;
		}
	}
	echo("Number of letters : $nbLetter\n\n");
}

function replaceLetter($text,$charA,$charB)
{
	$i = 0;
	while($i < strlen($text))
	{
		if($text[$i] == $charA)
		{
			$text[$i] = $charB;
		}
		$i++;
	}
	echo("The letter $charA was replaced by the letter $charB\nResult : $text\n\n");
}

function cutWord($text)
{
	$i = 0;
	$space = " ";
	while($i < strlen($text))
	{
		if ($text[$i] == $space)
		{
			$text[$i] = "\n";
		}
		$i++;
	}
	echo("$text\n\n");
}

$bigLoop = false;
$smallLoop = false;

while($bigLoop == false){
	$smallLoop = false;
	$text = readline("Please enter some text : ");
	echo("What would you like to do with it?\r\n\n");
	echo("  1. Check if it is a palindrome.\r\n");
	echo("  2. Count how many letters are in it.\r\n");
	echo("  3. Replace one of its letters by another one.\r\n");
	echo("  4. Separate each of its words.\r\n");
	echo("  5. I changed my mind, I want to quit.\r\n\n");
	$choice = readline("Please enter the number corresponding to your choice : ");

	while($smallLoop == false){
		if($choice == "1"){
		  palindrome($text);
			$smallLoop = true;
			$exit = readline("Enter X to exit or anything else to restart  : ");
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "2"){
			countLetter($text);
			$smallLoop = true;
			$exit = readline("Enter X to exit or anything else to restart  : ");
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "3"){
			$charA = readLine("Enter the letter you would like to replace : ");
			$charB = readLine("Which letter would you like to replace it with? ");
			replaceLetter($text,$charA,$charB);
			$smallLoop = true;
			$exit = readline("Enter X to exit or anything else to restart  : ");
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "4"){
			cutWord($text);
			$smallLoop = true;
			$exit = readline("Enter X to exit or anything else to restart : ");
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "5"){
			echo("Goodbye.\r\n");
			$smallLoop = true;
			$bigLoop = true;
		}else{
		  $choice = readline("Wrong input. Please enter only one number corresponding to a choice : \r\n");
		}
	}
}
?>
