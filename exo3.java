
public class exo3
{
	public static void main(String[] args)
	{
		String word="anticonstitution";
		char letter = 't';
		int count = 0;

		for (int i=0; i < word.length(); i++)
	    {
	        if(word.charAt(i) == letter)
	        {
	    		count++;
	    	}
	    }
	System.out.println("le nombre de "+letter+" est :"+ count);
	}
}
