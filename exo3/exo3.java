import java.util.*;

public class exo3{

	public static void main(String[] args){

String word = args[0];
char charac = args[1].charAt(0);
int result = 0;
int i = 0;

while(i<word.length()){
	if (word.charAt(i) == charac){
	 	result += 1;

	}
	i += 1;

}

System.out.println("Le nombre de " + charac + " est : " + result);

}}
