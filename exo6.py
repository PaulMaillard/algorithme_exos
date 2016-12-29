program_loop = False
choice_loop = False
words = ""
userInput = ""

while program_loop == False :
    words = raw_input("What should the parrot say ? ")
    print words
    choice_loop = True
    while choice_loop == True :
        userInput = raw_input("Enter 'R' to restart or 'X' to exit. ").capitalize()
        if userInput == "X":
            print('Goodbye.')
            choice_loop = False
            program_loop = True
        elif userInput == "R":
            choice_loop = False
        else :
            print('Wrong input.')
