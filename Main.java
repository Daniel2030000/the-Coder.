package com.company;

import java.awt.*;
import java.util.Date;
import java.util.Locale;
import java.util.Scanner;

public class Main {
 static int age2 = 14; //global variable and is available to all the classes
    //to use it inside the class declare the static keyword
    public static void main(String[] args) {
        // write your code here
        //string is a sequence of characters
        System.out.println("My name is Daniel");
        System.out.println("I am a programmer");
        // data types
        //1 integer stores non decimal numbers, stores values upto 2billion
        byte age1 = 30;
        Date now = new Date(); //imports a new package on the top of this page
        System.out.println(now);
        int age = 20; //declaring and initializing a variable and is a local variable
        System.out.println("I am " + age + " years old");
        System.out.println(" and I am" + age2 + "years old");

        //primitive and reference of non-primitive types
        //primitive stores simple values like integers, characters, booleans and reference types stores complex objects like bytes
        // integer types
        byte SingleByte = 100; // -128 to 127
        short SmallNumber = 20000; // -32768 to 32768
        int Integer = 23135; //-2147483648 to 2147483648
        long LargeInteger = 200928457098570l;

        //booleans
        boolean IsWeekend = true;
        boolean IsWorkday = false;

        //decimals
        double aDouble = 1.22324242535;
        float aFloat = -3.456F;//F is used to let the compiler know that its a floating point number

        //characters
        char grade = 'A';

        int num = 5; //converting integer to a double but vise versa cannot be true
        double num2 = num;
        System.out.println(num2);// implicit type of conversion

        double num3 = 4.5;// this is explicit type of conversion
        int num4 = (int) num3;
        System.out.println(num4);

        //operators are just symbols
        //arithmetic operators perform arithmetic operations eg +, -, *, / and %
        int number1 = 10;
        int number2 = 4;
        System.out.println(number1 % number2);
        System.out.println(number1 + number2);
        System.out.println(number1 - number2);
        System.out.println(number1 * number2);
        System.out.println(number1 += 3); // also applies to all the arithmetic operators
        //if you divide an integer by another integer the result will be and integer
        //if you divide an integer and a double the result is a double and vise versa is also true

        //relational operators compares two numbers eg > < <= etc
        System.out.println(number1 == number2);

        //not equal to
        System.out.println(number1 != number2);

        //greater than
        System.out.println(number1 > number2);

        //less than
        System.out.println(number1 < number2);

        //greater or equal
        System.out.println(number1 >= number2);

        //less than or equal to
        System.out.println(number1 <= number2);

        //logical operators
        //and &&
        int age3 = 25;
        System.out.println(age >= 18 && age <= 40);

        //logical or ||
        boolean isStudent = false;
        boolean isLibraryMember = true;
        System.out.println(isStudent || isLibraryMember);

        //not ! operator reverses a boolean value
        System.out.println(!isStudent);

         //unary operators
        int score = 0;
        int turns = 10;

        score++; //increases value of score by one
        turns--; //decrease the value of turns by one
        System.out.println(score);
        System.out.println(turns);
        //System.out.println(score++); prints the only of the value of score without incrementing int
        //System.out.println(++score ); prints the value of score incremented to by 1
        
        char Grade = 'A'; //stores only single letters or characters
        String name = "His Excellency";// stores an array of characters
          String name1 = new String("Father Lord"); //new keyword also used to declare strings
        
        String literalString = "abc";
        String literalString1 = "ABC";

        String objectString = new String ("xyz");
        String objectString1 = new String("xyz");
        System.out.println(literalString == literalString1);
        System.out.println(objectString == objectString1);

        String name2 = "Daniel";
        String countyName = "Kirinyaga Kenya";
        int age2 = 20;
        String company = "FreeCodeCamp.com";
        double gpa = 3.0;
        boolean amTellingTheTruth = false;
        String formattedString = String.format("My name is %s. I am from %s. I am %d years old. I work for %s. I have attended 100 of my classes. These are all %b claims", name,
                countyName, age2, company, gpa, amTellingTheTruth);
        System.out.println(formattedString);
        //System.out.println(String.format("My name is %s. I am from %s. I am %d years old. I work for %s. I have attended 100 of my classes. These are all %b claims", name,
                //countyName, age2, company, gpa, amTellingTheTruth));
        //System.out.println("My name is "+ name + " and I am from "+ countyName +"  and I am "+ age2 + " years old");
        //using + signs becomes tedious hence we use formatted strings meaning using format specifiers for a float is %f
        //for a character is %c and for a boolean type is %b

        String Name = "Daniel Baraka";
        System.out.println(Name.length());
        System.out.println(Name.isEmpty());
        System.out.println(Name.toUpperCase());
        System.out.println(Name.toLowerCase());

        String string1 = new String("abc");
        String string2 = new String("abc");

        System.out.println(string2 == string2);
        System.out.println(string1.equals(string2));

        String string = "The sky is blue";
        System.out.println(string.replace("blue", "red"));//but does not change the original code
        System.out.println(string.contains("sky"));//output true

        //getting inputs from the user
        Scanner scanner = new Scanner(System.in);

        System.out.print("What is your name: ");
        String YourName = scanner.nextLine();

        System.out.println(YourName);
        System.out.printf("Hello %s, How old are you?", YourName);
        int Age = scanner.nextInt();
        //int Age = Integer.parseInt(scanner.nextLine());

        //clears up the input buffer you can also use the parseInt...
        scanner.nextLine();
        System.out.printf("%d years old is an excellent age to start coding. What language do you prefer?", Age);
        String language = scanner.nextLine();

        System.out.printf("%s is a very popular programming language.", language);
        scanner.close();

    }
}
