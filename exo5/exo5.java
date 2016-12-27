//exercises on string
//by fflachet
//beweb

public class exo5
{
	public static void main(String[] args)
	{
		String word = "beweb";
		boolean palindrome = false;
		int i = 0;
		int j = word.length()-1;

		System.out.println(word);

		while (i < word.length()-1)
		{	
			if(word.charAt(i) == word.charAt(j))
			{
				j--;
				i++;
				palindrome = true;
			}
			else
			{
				palindrome = false;
				break;
			}
		}
		if(palindrome == true)
		{
			System.out.println("ce mot est un palindrome");
		}
		else
		{
			System.out.println("ce mot n'est pas un palindrome");
		}

	}
}