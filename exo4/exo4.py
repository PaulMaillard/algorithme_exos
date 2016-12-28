i = 0 #index
triangle = []
calcul = []
result = 0

def pyramideHt(htmax):

	for i in range(htmax):
		if(i < 2):
			calcul.append(1)
			triangle.append(calcul)


		print triangle


pyramideHt(5)