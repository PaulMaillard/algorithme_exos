<?php
//exercices on string
//functions by fflachet
//user interface by PaulMaillard
//beweb lunel

//that function checks if a word is a palindrome
function palindrome($text)
{
	$flag = false;
//the variable i will designate the first index of the word (its first letter).
	$i = 0;
//the variable j will designate the next-to-last index of the word (its last letter).
	$j = strlen($text)-1;
//the function will loop as long as the variable i hasn't been incremented to the full length of the word.
	while ($i < strlen($text))
	{
//as long as the index i and the index j are the same letter, the word is a palindrome.
		if($text[$i] == $text[$j])
		{
//once the function has determined that two letters are the same,
//it moves i forward and j backwards to check the next two letters.
			$j--;
			$i++;
//if the function has gone through the entierty of the word whithout getting any mismatches,
//then the flag variable will end up true.
			$flag = true;
		}
		else
		{
//otherwise the flag will be set to false at the first mismatch, and the loop will immediatly stop
//(since one mismatch is enough to stop the word from being a palindrome).
			$flag = false;
			break;
		}
	}
	if($flag == true)
		echo("This text is a palindrome.\n\n");
	else
		echo("This text is not a palindrome.\n\n");
}

//this function counts the alphabetic characters in a string
function countLetter($text)
{
	$i = 0;
	$nbLetter = 0;
//the function will loop as long as the variable i hasn't been incremented to the full length of the text.
	while($i < strlen($text))
	{
//the fuction will only increment the variable couting the number of letters
//if the letter is an alphabetic character (and not a space, number, etc.)
		if(ctype_alpha($text[$i]))
		{
			$nbLetter++;
			$i++;
		}
//if the character of the current index isn't alphabetic,
//the function simply moves to the next character.
		else
		{
			$i++;
		}
	}
	echo("Number of letters : $nbLetter\n\n");
}

//this function replaces a specified character A by a specified character B
function replaceLetter($text,$charA,$charB)
{
	$i = 0;
//the function will loop as long as the variable i hasn't been incremented to the full length of the text.
	while($i < strlen($text))
	{
//each time the function comes by a character A
		if($text[$i] == $charA)
		{
//it replaces it by a character B.
			$text[$i] = $charB;
		}
		$i++;
	}
	echo("The letter $charA was replaced by the letter $charB\nResult : $text\n\n");
}

//that function sperarates each word composing a sentence line by line
function cutWord($text)
{
	$i = 0;
	$space = " ";
//the function will loop as long as the variable i hasn't been incremented to the full length of the text.
	while($i < strlen($text))
	{
//if the variable encounters a space, it replaces it with a line break.
		if ($text[$i] == $space)
		{
			$text[$i] = "\n";
		}
		$i++;
	}
	echo("$text\n\n");
}

//***** USER INTERFACE *****//

//the big loop is the main program loop.
$bigLoop = false;
//the small loop is used to send the user back to fill the $choice variable if he enters anything else than 1-5.
$smallLoop = false;

//the user enters the big loop.
while($bigLoop == false){
//this ensures the small loop is active if the user deactivated it during a previous big loop.
	$smallLoop = false;
//any text the user enters is stored in the variable $text, lowercase (the palindrome function is case-sensitive)
	$text = strtolower(readline("Please enter some text : "));
	echo("What would you like to do with it?\r\n\n");
	echo("  1. Check if it is a palindrome.\r\n");
	echo("  2. Count how many letters are in it.\r\n");
	echo("  3. Replace one of its letters by another one.\r\n");
	echo("  4. Separate each of its words.\r\n");
	echo("  5. I changed my mind, I want to quit.\r\n\n");
//the choice the user makes is stored in the variable $choice.
	$choice = readline("Please enter the number corresponding to your choice : ");

//the user enters the small loop.
	while($smallLoop == false){
//if the user makes the first choice, the palindrome function is executed with the variable text as an argument.
		if($choice == "1"){
		  palindrome($text);
//since the user entered a valid number, the small loop is deactivated.
			$smallLoop = true;
//the user can exit by setting the $exit variable to "X". A lowercase "x" works as well.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));
//if X is entered,
			if($exit == "X"){
//the big loop is deactivated, and the program closes.
				$bigLoop = true;
			}else{}
//if the user makes the second choice, the countLetter function is executed with the variable text as an argument.
		}elseif($choice == "2"){
			countLetter($text);
//since the user entered a valid number, the small loop is deactivated.
			$smallLoop = true;
//the user has the option to exit.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));
//if X is entered,
			if($exit == "X"){
//the big loop is deactivated, and the program closes.
				$bigLoop = true;
			}else{}
//before the replaceLetter function can be executed, it need $charA and $charB as arguments, so the user defines those first
		}elseif($choice == "3"){
			$charA = readLine("Enter the letter you would like to replace : ");
			$charB = readLine("Which letter would you like to replace it with? ");
			replaceLetter($text,$charA,$charB);
//since the user entered a valid number, the small loop is deactivated.
			$smallLoop = true;
//the user has the option to exit.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));
//if X is entered,
			if($exit == "X"){
//the big loop is deactivated, and the program closes.
				$bigLoop = true;
			}else{}
//if the user makes the fourth choice, the cutWord function is executed with the variable text as an argument.
		}elseif($choice == "4"){
			cutWord($text);
//since the user entered a valid number, the small loop is deactivated.
			$smallLoop = true;
//the user has the option to exit.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));
//if X is entered,
			if($exit == "X"){
//the big loop is deactivated, and the program closes.
				$bigLoop = true;
			}else{}
//if the user chooses to exit the program,
		}elseif($choice == "5"){
			echo("Goodbye.\r\n");
//both loops are deactivated at once, and the program closes.
			$smallLoop = true;
			$bigLoop = true;
//if the user inputted a value other than 1-5, the pogram asks again for a valid number to fill the variable $choice.
//this is the only case where the small loop stays active.
		}else{
		  $choice = readline("Wrong input. Please enter only one number corresponding to a choice : \r\n");
		}
	}
}
?>
