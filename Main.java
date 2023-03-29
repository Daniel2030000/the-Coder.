package com.company;
import javax.swing.JFrame;
import javax.swing.JRadioButton;
import javax.swing.ButtonGroup;
public class Main {

    public static void main(String[] args) {
	// write your code here
        JFrame frame = new JFrame("FORMS");
        frame.setSize(500, 500);
        frame.setLocation(200, 100);
        frame.setLayout(null);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JRadioButton rb1 = new JRadioButton("MALE");
        rb1.setBounds(100,100,200,50);
        frame.add(rb1);

        JRadioButton rb2 = new JRadioButton("FEMALE");
        rb2.setBounds(100, 200, 200, 50);
        frame.add(rb2);

        ButtonGroup bg = new ButtonGroup();
        bg.add(rb1);
        bg.add(rb2);
        frame.setVisible(true);
    }
}
