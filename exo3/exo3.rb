#count letter
#by fflachet
#beweb

$word = "anti"
$carac = "t"
$result = 0
$i = 0

	
while $i < $word.length
	if $word[$i] == $carac
		$result+=1
	end
$i+=1
end
print ("le nombre de caractereRecherche est : #{$result}\n")