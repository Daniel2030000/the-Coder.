<html>
    <head>
        <meta charset="UTF-8">
        <title>DOCUMENT</title>
    </head>
    <body>
        <?php
        //types of functions
        //built-function eg var_dumb()
        //2 user-defined function=created by the user
        function name(){
            echo "Hello ";
            $s="Daniel";
            echo $s;
        }
        name();
        echo "<br>";
        //passing arguments to functions
        $num1 = 5;
        $num2 = 5;
        function calculator($num1, $num2){
            echo $num1*$num2;
        }
        calculator($num1, $num2);
        echo "<br>";
        //also
        
        function calculate($num1 = 20, $num2 = 10){
            echo $num1*$num2;
        }
        calculator($num1=20,$num2=10);
        echo"<br>";
        //function with return values
       function greetUser($user1, $user2){
        echo "Hello $user1";
        echo "My name is $user2";
       }
       greetUser("Daniel","Enock");
       echo "<br>";
       //function with return type
       //1.pass by value
       $num1 = 10;
       $num2 = 15;
       function returntype($num1, $num2){
        $result = $num1 + $num2;
        return $result;
       }echo "The numbet is:" .returntype($num1, $num2);
       echo "<br>";
       //2.pass by reference = pass the address of the value
       $x = 10;
       function addbyValue($x){
        $x += 5;
       }
       function addbyReference(&$x){
        $x += 10;
       }addbyValue($x);
       echo "The value is: $x";
       echo "<br>";
       addbyReference($x);
       echo "The value is: $x";
       echo "<br>";
       //global and local scope
       $x = 10;//global scope=can be accessed from anywhere outside the function
       $y = 20;
       function myFucniton($y){
        echo $y;
        $y = 20;// is a local variable of the function and only be used insude the function
       }
       myFucniton($y);
        ?>
        
    </body>
</html>