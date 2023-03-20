<?php
//includes function puts the files together in the webpage
  include 'includes/head.php';
  include 'includes/header.php';
?>

    
    <h1><?php introduction()?></h1>

<?php
include "includes/myfooter.php";
//include and the path is wrong we only get a warning
//require and the path is wrong the script will stop
//require can be used in place of include
//require_once when you want to include a file and have alot of functions
//include_once and require_once are use interchangably

?>
    