//exercises on string
//by fflachet
//beweb

public class exo5
{
	public static void palindrome(String word)
	{
		boolean flag = false;
		int i = 0;
		int j = word.length()-1;

		System.out.println(word);

		while (i < word.length()-1)
		{	
			if(word.charAt(i) == word.charAt(j))
			{
				j--;
				i++;
				flag = true;
			}
			else
			{
				flag = false;
				break;
			}
		}
		if(flag == true)
		{
			System.out.println("ce mot est un palindrome");
		}
		else
		{
			System.out.println("ce mot n'est pas un palindrome");
		}
	}


	public static void countLetter(String word)
	{
		int i = 0;
		int nbLetter = 0;


		System.out.println(word);

		while(i < word.length()-1)
		{
			if (word[i]
			{
				nbLetter++;
				i++;
			}
			else
			{
				i++;
			}
		}
		System.out.println("nombre de lettres alpha : " +nbLetter);
	}
	public static void main(String[] args)
	{
		palindrome("beweb");
		countLetter("beweb");
	}
}