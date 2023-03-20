<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //built in functions
    //math functions
    echo ceil(0.50);
    echo "<br>";
    echo floor(0.50)."<br>";
    //round round floating point numbers
    echo round(0.2345,2)."<br>";
    echo exp(4)."<br>";

    //string functions
    //spaces are also counted characters
    $str = "Today is a Monday day";
    echo strlen($str) ; 

    //string word count
    $firstName = "My first name is Daniel";
    echo "<br>";
    echo str_word_count($firstName)."<br>";

    //how to find text within a string
    $email = "danielbaraka202@gmail.com";
    if(strpos($email,"@")){
        echo "This is a valid email";
    }else{
        echo "This is an email input feild";
    }

    echo "<br>";
    
    //UCword function=converts the first character of every word in a string into uppercase
    echo ucwords("What is your name?")."<br>";
    //whole string to uppercase 
    echo strtoupper("What is your name?")."<br>";
    //whole string to lowerCase
    echo strtolower("What is your name?");

    //Array functions
    $personalInfo = array("Name"=>"Daniel","Age"=>20,"City"=>"Kutus");
    $moreinfo = array("State"=>"Africa", "Weight"=>80);
    $personalInfo = array_merge($personalInfo,$moreinfo);
    foreach($personalInfo as $key =>$value){
        echo $key.":".$value."<br>";
    }
    //print only keys
    print_r(array_keys($personalInfo));

    //print only values
    print_r(array_values($personalInfo));
    echo "<br>";
  
    //add a value in array
    $cars = array("Volkswagen","Mercedes","Audi");
    array_push($cars,"volvo");
    print_r($cars);
    var_dump($cars);
    echo "<br>";

    //array search function
    echo array_search("Volkswagen", $cars)."<br>";

    //count function returns number of elements in the array
    echo count($cars);

    //exercise
    //create a string varialbe with a long set of characters and check if 
    //it is lowercase and
    $str = "My name is Daniel I am 20 years old and live in Kutus Kenya.
    I'am getting pretty old. I like coding across all the programming languages
    because it is a habit.";
    function lowerCasecheck($str){
        echo strtolower($str);

    }
    lowerCasecheck($str);
    echo "<br>";

    // creat a long string varialbe....
    $str = "My name is Daniel I am 20 years old and live in Kutus Kenya.
    I'am getting pretty old. I like coding across all the programming languages
    because it is a habit.";

    $punctuation = 0;
    function searchText($str,$punctuation){
        for($i = 0; $i < strlen($str);$i++){
            if($str[$i]=="."){
               $punctuation++;
            }
        }
        echo"The text has".$punctuation."punctuation";
    }
    searchText($str,$punctuation);
    ?>
</body>
</html>