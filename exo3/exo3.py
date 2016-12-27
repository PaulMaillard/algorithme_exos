#count letter
#by fflachet
#beweb

word = "anticonstitutionnellement"
carac = "t"

i = 0
result = 0
while i < len(word):
	if word[i] == carac:
		result += 1
	i += 1
print('le nombre de caractereRecherche est : ' + str(result))