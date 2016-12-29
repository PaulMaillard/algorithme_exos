
result = 0
i = 0
word, char = ARGV

while i < word.length
	if word[i] == char
		result += 1
	end
i += 1
end

puts ("Le nombre de #{char} est : #{result}")
