<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php" method="get">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
     </form>
    </form>
    <?php
    //sessions
    //good to use for sensitive information
    //sessions exits as long the browser is open
    session_start();
    //storing information
    $_SESSION["Name"] = "Daniel";
    $_SESSION["Age"] = 20;

    echo "Hello ".$_SESSION["Name"];
    //destroy session
    session_destroy();

    //superglobal cookies
    //small file that the web server strored on the client computers
    //six arguments'
    //name
    //value'
    //expire
    //path
    //domain
    //security

    //if you dot not include expiration date the cookie will be stored for the current session
    $time = time()+ 86400*30;
    setcookie("name","Daniel", $time);
    print_r($_COOKIE);

    //files
     echo $name = $_FILES['file']['name']."<br>";
     echo $type = $_FILES['file']['type'];
     echo $ntmp = $_FILES['file']['tmp_name']."<br>";
    ?>
    <form action="files.php" method="post">
        <input type="file" name="file">
        <button type="submit">submit</button>
    </form>
</body>
</html>