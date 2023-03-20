<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //superglobals used to store and get informartion from one page to another
    //Globls = a super global used to acces variables from anywhere in the php script
    $x = 100;
    $y = 200;
    function add(){
        $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
    }
    add();
    echo $z;
    echo "<br>";
    //s_post = used to collect data from the html form after submitting it and will not show up
    //s_get used to collect data from html form after submitting it and is visible

    ?>
    <form action="superglobals.php" method="post">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
    //if the submit buttons works see the code below
    //isset checks if variable is set or not
    if(isset($_POST)){
        echo $_POST['name']." Your form is submitted";
     }
     ?>
</body>
</html>