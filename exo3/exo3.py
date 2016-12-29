import sys

word = sys.argv[1]
char = sys.argv[2]
result = 0
i = 0

while i < len(word) :
	if word[i] == char :
		result += 1
	i += 1
print ("Le nombre de " + str(char) + " est : " + str(result))
