<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
        //varaibles in Php
        $name = "Daniel";
        $age = 20;
        echo "I am $name and I am $age years old <br>";
        echo "I am $name <br>";
        echo "$name is $age years old <br>";

        //datatypes 
        //Intager = whole number without decimal points
        $age= 24;
        echo "My age is $age <br>";
        //double datatype = has decimals
        $price = 10.4;
        echo "The price of fuel as per now is $price <br>";
        //string= sequences of characters 
        $name = "Daniel";
        echo "My name is $name<br>";
        //Booleans = has only two options can be true or false
        $isallowed=True;
        echo $isallowed;
        //Objects 
        //Resource
        //Null = value that has no assignment to it
        $s = "Hello world";
        $s = null;
        echo "<br>";
        //Arrays=can hold more values at a time
        $cars1 = "BMW";
        $cars2 = "Audi";
        $cars3 = "Mercedes";
        //initialization
        $cars = array("BMW","Audi","Mercedes");
        echo $cars[2];
        $cars2 = array("volvo","Note","Passo");
        echo "<br>";

        $myCar = array("Audi", 2015,75);
        var_dump($myCar); //assigns a key to the string
        echo "<br>"; //gives values that are human readable than the var_damp function
        print_r($myCar);
        
        echo "<br>";
        //associative arrays = associates key to the values assignes
        $cars = array("Audi" =>50.500,"BMW" =>40.700,"Mercedes"=>60.300);
        var_dump($cars);
        echo "<br>";
        print_r($cars);

        echo "<br>";
        $car1["Mercedes"] = 60.200;
        echo $car1["Mercedes"];

        foreach($cars as $key => $value){
            echo "My".$key. "has".$value. "milage<br>";
        }
        //multidimensional arrays= array inside an array
        $cars = array("Expensive" => array("Audi","Merceds","BMW"),
        "Inexpensive" =>array("volvo","Ford","Toyota")
        );
        echo $cars["Expensive"][2];
        echo "<br>";
        echo $cars["Inexpensive"][1];

        ?>
    </body>
</html>