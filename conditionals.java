package com.company;
import java.util.Scanner;
public class conditionals {
    public static void main(String[] args){
        Scanner c = new Scanner(System.in);

        System.out.print("Enter first number: ");
         double num1 = c.nextDouble();

        System.out.print("Enter second number: ");
        double num2 = c.nextDouble();
        c.nextLine();

        System.out.print("What operations do you want to perform? ");
        String operations = c.nextLine();
        //switch statements
        switch (operations){
           case "+":
                System.out.printf("The sum is: %f + %f = %f", num1, num2, num1 + num2 );
                break;
            case "-":
               System.out.printf("The sum is: %f - %f = %f", num1, num2, num1 - num2 );
               break;
            case "*":
                System.out.printf("The sum is: %f * %f = %f", num1, num2, num1 * num2 );
                break;
            case "/":
                if(num2 == 0){
                    System.out.println("Cannot divide a number by 0");
                }else {
                    System.out.printf("The sum is: %f / %f = %f", num1, num2, num1 / num2);
                    break;
                }
            default:
                System.out.println("This is not a supported operation");
        }

        // if statements
        if(operations.equals("+")){
            System.out.printf("The sum is: %f + %f = %f", num1, num2, num1 + num2);
        }
        else
            if(operations.equals("-")){
              System.out.printf("The difference is: %f - %f = %f",num1, num2, num1 - num2);
        }else
            if(operations.equals("*")){
            System.out.println("The product is: " + num1 + "*" + num2 +"=" + num1 * num2);
        }
        else
            if(operations.equals("/")){
                if(num2 == 0){
                    System.out.println("Cannot divide a number by 0");
               }
                System.out.printf("The division is: %f / %f = %f", num1, num2, num1/num2);
            }
            else{
            System.out.println("We cannot understand you question");
        }

        c.close();
   }
}
