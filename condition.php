<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        //conditional Statements
        //if else statements= excecutes statement if the condition provided evaluates to true
        $age = 20;
        if($age < 18){
            echo "Oops you are too young";
        }elseif($age > 50){
            echo "You are too old to party";
        }elseif($age < 10){
            echo"You are just a kid!";
        }elseif($age > 18 && $age < 21){
            echo "You are not allowed to drink";
        }else{
            echo "You are old enough to part";
        }
        
        echo "<br>";
        //switch statements
        $role = "";
        switch($role){
            case "Visitor":
                echo"Welcome visitor";
                break;
            case "Admin":
                echo"Welcome admin";
                break;
            case "SuperAdmin":
                echo"Welcome superAdmin";
                break;
            case "Boss":
                echo"Welcome boss";
                break;
            default:
            echo "There is nothing like that!";
            
        };

        //loop 
        //while loops 
        //print numbers one to ten
        //used when you dont know the number of itteration that are going to take place inside the loop
        $i=0;
        while($i<=10){
            echo "Variable is: ".$i++."<br>";
        }
        echo"<br>";
        $j=1;
        while($j<=10){
            echo "I am is the Giant in coding <br>";
            $j++;
        }
        $I =1;
        while($I<=5){
            echo $I."<br>";
            $J = 1;
            while($J<=5){
                echo $J."<br>";
                $J++;
            }
            $I++;
        }
        //do-while loops=first do then while
        $cookie = 1;
        do{
            echo "I love cookies <br>";
            $cookie++;
        }
         while($cookie<=10);
         echo "<br>";

         //for loops = used then the number of itterations are know
         for($i = 0; $i<=6; $i++){
            echo "This bitch is super hot!<br>";
         };

         //foreach loop itterate over and array variables
         $names = array("Jonte","Michael","David");
         foreach($names as $name){
            echo "My name is $name";
            echo "<br>";
         }
       

        ?>
    </body>
</html>