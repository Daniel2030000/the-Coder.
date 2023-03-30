package com.company;

import java.sql.SQLOutput;
import java.util.Scanner;
import java.util.stream.IntStream;

public class LOOPS {
    public static void main(String[] args){
        int i[] = {1,2,3,4,5,6,7,8,9, 10};

        int sum = 0;
        for(int index = 0; index < i.length; index++){
            System.out.println(i[index]);
            sum += i[index];
        }
        System.out.println("Sum is:" + sum);

        //printing multiplication tables using for loops
        Scanner scanner = new Scanner(System.in);
        int number = 5;
        for (int multiplier = 1; multiplier <= 10; multiplier++){
            System.out.printf("%d * %d = %d \n", number, multiplier, number * multiplier);
        }

        //further in tables
        for (int num = 1; num <= 20; num++){
            for(int Multiplier = 1; Multiplier <= 10; Multiplier++){
                //System.out.println(num +" * "+ Multiplier +"="+ num * Multiplier);
                System.out.printf("%d * %d = %d \n", num, Multiplier, num * Multiplier);
            }
        }
        System.out.print("Enter number: ");
        int num = scanner.nextInt();
        for(int multiple = 1; multiple <= 10; multiple++){
            System.out.printf("%d * %d = %d \n", num, multiple, num * multiple);
        }
        //printing all the odd number from  1 to 50
        for(int j = 1; j<= 100; j++) {
            if (j % 2 == 0) {
                System.out.println(j + " :is even");
            } else {
                System.out.println(j + ": is odd");
            }
        }
        System.out.print("Enter integer: ");
        int k = scanner.nextInt();
        for(k = 1; k <= 50; k++){
            if(k % 2 == 0){
                System.out.println(k + ": is even");
            }else{
                System.out.println(k + ": is odd");
            }
        }
        int nums[] = {1,2,3,4,5};

        int Sum = 0;
        for(int no:nums){
            System.out.println(no);
            Sum += no;
            System.out.println("Sum is: "+ Sum);
        }
    }
}
