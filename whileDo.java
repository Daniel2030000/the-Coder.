package com.company;

import java.util.Scanner;

public class whileDo {
    public static void main(String[] args){
        Scanner s = new Scanner(System.in);
        int i = 0;
        while(i <= 10){
            System.out.println("Baraka mean blessings");
            i++;
        }
        int num = 5;
        int multiplier = 1;
        while(multiplier <= 10){
            System.out.printf("%d * %d = %d \n", num, multiplier, num * multiplier);
            multiplier++;
        }

        System.out.print("Enter number: ");
        int Num = s.nextInt();
        int multiple = 0;
        while (multiple <= 10){
            System.out.printf("%d * %d = %d \n", Num, multiple, Num * multiple);
            multiple++;
        }

        //do while loops
        do{
            System.out.printf("%d * %d = %d \n", Num, multiple, Num * multiple);
            multiple+=2;
        }
        while(multiple <= 10);
    }
}
