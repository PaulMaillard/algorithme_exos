public class parrot{

  public static void main(String[] args) {

    boolean program_loop = false;
    boolean choice_loop = false;
    String words = "";
    String userInput = "";

    while(program_loop == false) {
      words = readline("What should the parrot say ? ");
      System.out.println(words + "\n");
      choice_loop = true;
      while(choice_loop == true) {
        userInput = readline("Enter 'R' to restart or 'X' to exit. ");
        if("X".equals(userInput) || "x".equals(userInput)) {
            System.out.println("Goodbye.\n");
            choice_loop = false;
            program_loop = true;
        } else if("R".equals(userInput) || "r".equals(userInput)) {
            choice_loop = false;
        } else {
            System.out.println("Wrong input.\n");
        }

      }

    }

  }

}
