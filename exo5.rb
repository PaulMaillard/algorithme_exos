
mots = ""
print "Propose un mot; je te dirai si c'est un palindrome ! : \n\r"
mots = gets.chomp
 i = 0 
 j = mots.length-1 
 while i < (mots.length)/2
     
     if mots[i] == mots[j]
         i +=1
         j -=1
        else puts "non"
            exit        
     end 
    
 end
 puts "oui"
