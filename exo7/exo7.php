<?php
//exercices on string
//functions by fflachet
//user interface by PaulMaillard
//beweb lunel

function palindrome($text)     //that function checks if a word is a palindrome
{
	$flag = false;
	$i = 0;										   //the variable i will designate the first index of the word (its first letter).
	$j = strlen($text)-1;			   //the variable j will designate the next-to-last index of the word (its last letter).
	while ($i < strlen($text))   //the fuction will loop as long as the variable i hasn't been incremented to the full length of the word.
	{
		if($text[$i] == $text[$j]) //as long as the index i and the index j are the same letter, the word is a palindrome.
		{
			$j--;										 //once the function has determined that two letters are the same,
			$i++;										 //it moves i forward and j backwards to check the next two letters.
			$flag = true;						 //if the fuction has gone through the entierty of the word whithout getting any mismatches,
		}													 //then the flag variable will end up true.
		else
		{
			$flag = false;					 //otherwise the flag will be set to false at the first mismatch, and the loop will immediatly stop
			break;									 //(since one mismatch is enough to stop the word from being a palindrome).
		}
	}
	if($flag == true)
		echo("This text is a palindrome.\n\n");
	else
		echo("This text is not a palindrome.\n\n");
}

function countLetter($text)		//this function couts the alphabetic characters in a string
{
	$i = 0;
	$nbLetter = 0;
	while($i < strlen($text))    //the fuction will loop as long as the variable i hasn't been incremented to the full length of the text.
	{
		if(ctype_alpha($text[$i])) //the fuction will only increment the variable couting the number of letters
		{													 //if the letter is an alphabetic character (and not a space, number, etc.)
			$nbLetter++;
			$i++;
		}
		else                       //if the character of the current index isn't alphabetic,
		{													 //the fuction simply moves to the next character.
			$i++;
		}
	}
	echo("Number of letters : $nbLetter\n\n");
}

function replaceLetter($text,$charA,$charB)  //this function replaces a specified character A by a specified character B
{
	$i = 0;
	while($i < strlen($text))  //the fuction will loop as long as the variable i hasn't been incremented to the full length of the text.
	{
		if($text[$i] == $charA)  //each time the fiction comes by a character A
		{
			$text[$i] = $charB;    //it replaces it by a character B.
		}
		$i++;
	}
	echo("The letter $charA was replaced by the letter $charB\nResult : $text\n\n");
}

function cutWord($text)			 //that fuction sperarates each word composing a sentence line by line
{
	$i = 0;
	$space = " ";
	while($i < strlen($text))  //the fuction will loop as long as the variable i hasn't been incremented to the full length of the text.
	{
		if ($text[$i] == $space) //if the variable encounters a space, it replaces it with a line break.
		{
			$text[$i] = "\n";
		}
		$i++;
	}
	echo("$text\n\n");
}

//***** USER INTERFACE *****//

$bigLoop = false;				//the big loop is the main program loop.
$smallLoop = false;			//the small loop is used to send the user back to fill the $choice variable if he enters anything else than 1-5.

while($bigLoop == false){
	$smallLoop = false;		//this ensures the small loop is active if the user deactivated it during a previous big loop.
	$text = strtolower(readline("Please enter some text : "));	//any text the user enters is stored in the variable $text, lowercase (the palindrome function is case-sensitive)
	echo("What would you like to do with it?\r\n\n");
	echo("  1. Check if it is a palindrome.\r\n");
	echo("  2. Count how many letters are in it.\r\n");
	echo("  3. Replace one of its letters by another one.\r\n");
	echo("  4. Separate each of its words.\r\n");
	echo("  5. I changed my mind, I want to quit.\r\n\n");
	$choice = readline("Please enter the number corresponding to your choice : ");  //the choice the user makes is stored in the variable $choice.

	while($smallLoop == false){ //the user enters the small loop.
		if($choice == "1"){				//if the user makes the first choice, the palindrome fuction is executed with the variable text as an argument.
		  palindrome($text);
			$smallLoop = true;			//since the user entered a valid number, the small loop is deactivated.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));  //the user can exit by setting the $exit variable to "X". A lowercase "x" works as well.
			if($exit == "X"){				//if X is entered,
				$bigLoop = true;			//the big loop is deactivated, and the program closes.
			}else{}
		}elseif($choice == "2"){	//if the user makes the second choice, the countLetter fuction is executed with the variable text as an argument.
			countLetter($text);
			$smallLoop = true;			//since the user entered a valid number, the small loop is deactivated.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));	 //the user has the option to exit.
			if($exit == "X"){				//if X is entered,
				$bigLoop = true;			//the big loop is deactivated, and the program closes.
			}else{}
		}elseif($choice == "3"){	//before the replaceLetter function can be executed, it need $charA and $charB as arguments, so the user defines those first
			$charA = readLine("Enter the letter you would like to replace : ");
			$charB = readLine("Which letter would you like to replace it with? ");
			replaceLetter($text,$charA,$charB);
			$smallLoop = true;			//since the user entered a valid number, the small loop is deactivated.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));	 //the user has the option to exit.
			if($exit == "X"){				//if X is entered,
				$bigLoop = true;			//the big loop is deactivated, and the program closes.
			}else{}
		}elseif($choice == "4"){	//if the user makes the fourth choice, the cutWord fuction is executed with the variable text as an argument.
			cutWord($text);
			$smallLoop = true;			//since the user entered a valid number, the small loop is deactivated.
			$exit = strtoupper(readline("Enter X to exit or anything else to restart : "));	 //the user has the option to exit.
			if($exit == "X"){				//if X is entered,
				$bigLoop = true;			//the big loop is deactivated, and the program closes.
			}else{}
		}elseif($choice == "5"){	//if the user chooses to exit the program,
			echo("Goodbye.\r\n");
			$smallLoop = true;			//both loops are deactivated at once, and the program closes.
			$bigLoop = true;
		}else{  									//if the user inputted a value other than 1-5, the pogram asks again for a valid number to fill the variable $choice.
															//this is the only case where the small loop stays active.
		  $choice = readline("Wrong input. Please enter only one number corresponding to a choice : \r\n");
		}
	}
}
?>
