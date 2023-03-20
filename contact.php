<?php
if(isset($_POST['submit'])){
    $name = trim($_POST['name']);// trim function removes the wide spaces before and after the input
    $email = trim($_POST['email']);
    $subject = trim($_POST['Subject']);
    $message = trim($_POST['message']);
    $myMail = "daniel@live";
    $header = "From: ".$email;
    $message2 = "You have received a message form".$name.".\n\n".$message;
}
//parameters
//1 email you are sending it to
//2 subject
//3 is the message 
mail($myMail,$subject,$message2,$header);
header("Location; index.php?mailsend")
?>

