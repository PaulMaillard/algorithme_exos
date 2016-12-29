#count letter
#by fflachet
#beweb



def countLetter(word,letter)

	$result = 0
	$i = 0
	ARGV[0] = $word
	ARGV[1] = $letter

	while $i < $word.length.-1
		if $word[$i] == $letter
			$result+=1
		end
	$i+=1
	end
	("le nombre de #{$letter} est : #{$result}")
end

countLetter(ARGV[0], ARGV[1])