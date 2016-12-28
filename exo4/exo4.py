h=input("Entrez la hauteur de votre triangle :")

liste = [[1],[1,1]] #On crée une liste contenant deux autres listes. La plus grande liste contient les lignes du triangle (i) sous forme de listes plus petites
                    #contennant les caractères composant une ligne (j)
                    #Les deux lignes au sommet du triangle sont toujours un 1 et deux 1, donc on les définit directement et on les affiche
print liste[0]      #On affiche le premier objet de la liste, qui est lui-même une liste contenant un 1
print liste[1]      #On affiche le second objet de la liste, qui est lui-même une liste contenant deux 1

for i in range(2,h):      #tant que i (la longueur de la grande liste, qui définit le nombre de lignes du triangle) est entre 2 et la hauteur
                          #définie par l'utilisateur
    liste.append([1])     #on ajoute à la liste un nouveau tableau (nouvelle ligne donc) contenant seulement un 1
    for j in range(1, i):
        liste[i].append(liste[i-1][j-1] + liste[i-1][j])
    liste[i].append(1)
    print liste[i]
