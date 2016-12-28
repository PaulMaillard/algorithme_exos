# Tri dans un tableau par ordre descendant
# Par Paul Personne
# BeWeb Lunel

numbers = [58, 3, 25, 1, 6, 23, 7, 56]          #On definit notre tableau d'entiers dans un ordre aleatore
i = 0                                           #Variable d'incrementation
moved = False                                   #Variable detectant l'utilisation de la permutation
back = 0                                        #Variable permettant de revenir a l'index du tableau a partir duquel on a commence a decrementer
sorted = False                                  #Variable qui nous permet de terminer l'algorithme une fois que le tableau est classe

def permutation(numbers, i) :                   #Creation de la fonction de permutation
    global back                                 #On appelle la variable globale back pour que la fonction puisse la modifier
    temp = numbers[i]                           #Le nombre de l'index courant du tableau est stocke dans une variable locale temp
    numbers[i] = numbers[i+1]                   #Le nombre de l'index courant du tableau est remplace par le nombre de l'index suivant
    numbers[i+1] = temp                         #Le nombre de l'index suivant est remplace par le nombre de l'index courant (stocke dans la variable temp)
    while (i > 1) :                             #On decremente seulement si on a incremente au moins deux fois (puisqu'on fait une permutation avec index -1)
        i = i-1                                 #On decremente i
        back = back + 1                         #On incremente back
        if numbers[i] < numbers[i+1] :          #SI le nombre de l'index suivant est plus grand que le nombre de l'index courant
            temp = numbers[i+1]                 #On effectue la meme permutation que plus haut, mais on permute avec l'index precedent au lieu de l'index suivant
            numbers[i+1] = numbers[i]           #Puis, tant qu'on a pas decremente jusqu'a retourne i a la valeur 1, on continue de decrementer
            numbers[i] = temp
    i = back + i                                #Une fois sortis de la boucle de decrementation, on ajoute la valeur de back a i
    return True                                 #La permutation une fois terminee retourne vrai

while sorted == False :                         #Tant que le tableau n'est pas classe
    i = 0                                       #On s'assure que la variable d'incrementation est a 0
    while i < len(numbers) - 1 :                #Tant que on a pas incremente jusqu'a l'avant-dernier nombre du tableau
        if numbers[i+1] > numbers[i] :
            moved = permutation(numbers, i)
        back = 0
        i = i+1
    print(numbers)
    if moved == True :
        sorted = True
    moved = 0;
