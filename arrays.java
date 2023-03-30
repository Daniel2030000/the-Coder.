package com.company;

import java.util.Arrays;

public class arrays {
    public static void main(String [] args){
        //arrays

        char vowels[] = new char[5];//means it only carries 5 elements

        vowels[0] = 'a';
        vowels[1] = 'e';
        vowels[2] = 'i';
        vowels[3] = 'o';
        vowels[4] = 'u';
        vowels[5] = 'c'; //fails because the array bound is 5
        System.out.println(vowels[2]);
        System.out.println(Arrays.toString(vowels)); //prints an entire array you have to import the array util

        //also the same can be done as below
        char Vowels[] = {'e', 'u', 'a' ,'o', 'i'};
        System.out.println(Arrays.toString(vowels));
        System.out.println(vowels.length);
        Arrays.sort(vowels);
        char key = 'o';

        int foundItemIndex = Arrays.binarySearch(vowels, key);

        System.out.println(Arrays.toString(vowels));
        System.out.println(foundItemIndex);

        Arrays.fill(vowels, 'x'); //fills the array with x's

        vowels[2] = 'x';
        System.out.println(Arrays.toString(vowels));

        Arrays.sort(vowels);
        System.out.println(Arrays.toString(vowels));

        int startIndex = 1;
        int endIndex = 4;

        Arrays.sort(vowels, startIndex, endIndex);
        System.out.println(Arrays.toString(vowels));

        Arrays.fill(vowels, startIndex, endIndex, 'x');

    }
}
