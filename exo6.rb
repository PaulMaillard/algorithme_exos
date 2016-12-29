program_loop = false
choice_loop = false
words = ""
userInput = ""

while program_loop == false
  print "What should the parrot say ? "
  words = gets.chomp
  puts words
  choice_loop = true
  while choice_loop == true
    print "Enter 'R' to restart or 'X' to exit. "
    userInput = gets.chomp
    if userInput == "X" || userInput == "x"
        puts "Goodbye."
        choice_loop = false
        program_loop = true
    elsif userInput == "R" || userInput == "r"
        choice_loop = false
    else
        puts "Wrong input."
    end

  end

end
