$result = 0
$i = 0

def countLetter(word,letter)
	ARGV[0] = $word
	ARGV[1] = $letter
	letter = "t"
	while $i < $word.length-1
		if $word[$i] == $letter
			$result+=1
		end
	$i+=1
	end
	("le nombre de #{$letter} est : #{$result}")
end

countLetter(ARGV[0], ARGV[1])
