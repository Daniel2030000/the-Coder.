<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //'d'=day
    //'j'= Day without zeros
    //'D' = Day of week (3 letters)
    //'l' = full day of the week
    //'m' = monht as a number with zero
    //'n' = month as a number without zeros
    //'M' = month(3 letters)
    //'F' = full month
    //'y' = 2-digit year
    //'Y' = full year
    echo date('Y/m/d');
    echo "<br>";
    echo date('d/m/y');
    echo "<br>";

    //times
    //'g' = hours in 12-hr format without zeros
    //'h' = hours in 12-hour format with zero
    //'G' = hours in 24-format without zero
    //'H' = Hours in 24-hour format without zero
    //'a' = am/pm in lowercase
    //'A' = am/pm in uppercase
    //'l' = minutes without leading zero
    //'s' = seconds without leading zeros
    echo date('h:i:s a');
    //set time zone
    date_default_timezone_set('Europe/Amsterdam');
    //string to time
    $time = strtotime("4:00pm March 18 2023");
    echo $time;
    echo "<br>";
    echo date('m/d/y H:i:s',$time);

    ?>
</body>
</html>