
import java.util.*;

public class exo2{
   public static void main(String[] args){
int[] tableau = {3,20,15,28,9,6,52};
int permut = 0;
boolean sorted = false;
boolean moved = false;
int i =0;

while (sorted == false){
   moved = false;
   i = 0;

   while (i<tableau.length-1){
       if(tableau[i+1] > tableau[i]){
           
           permut = tableau[i]; 
           tableau[i] = tableau[i + 1]; 
           tableau[i + 1] = permut; 
           moved = true;


       }    
       i += 1;


   }
System.out.println(Arrays.toString(tableau));
   if (moved == false){
       sorted = true;
   }
}

}
}
