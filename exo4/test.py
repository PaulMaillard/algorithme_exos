ht = 5 

liste = [[1],[1,1]]

print liste[0]
print liste[1]
 
for i in range(2,ht):
   liste.append([1])
   for j in range(1, i):
       liste[i].append(liste[i-1][j-1] + liste[i-1][j])
   liste[i].append(1) 
   print liste[i]