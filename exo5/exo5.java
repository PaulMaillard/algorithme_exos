//exercises on string
//by fflachet
//beweb

public class exo5
{
	public static void main(String[] args)
	{
		String word = "kayas";
		boolean palindrome = false;
		int nbLetter = 0;
		String tmp = "";
		int i = 0;
		int j = word.length()-1;

		System.out.println(word);

		while (i < word.length()-1)
		{	
			if(word.charAt(i) == word.charAt(j))
			{
				j--;
				i++;
				if (word.charAt(i) != word.charAt(j))
				{
					System.out.println("ce mot n'est pas un palidromme");
					break;
				}
				else
				{
					System.out.println("est un palidromme");
				}
			}
			else
				System.out.println("n'est pas un palidromme");
					break;
		}
	}
}