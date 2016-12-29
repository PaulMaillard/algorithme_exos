<?php
$program_loop = false;
$choice_loop = false;
$words = "";
$userInput = "";
while ($program_loop == false){
  $words = readline("What should the parrot say ? ");
  echo $words . "\n";
  $choice_loop = true;
  while ($choice_loop == true){
    $userInput = readline("Enter 'R' to restart or 'X' to exit. ");
    if ($userInput == "X" || $userInput == "x"){
        echo "Goodbye.\n";
        $choice_loop = false;
        $program_loop = true;
    }elseif ($userInput == "R" || $userInput == "r"){
        $choice_loop = false;
    }else{
        echo "Wrong input.\n";
    }
  }
}
?>
