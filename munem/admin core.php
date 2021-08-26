<?php

require_once("config.php");

$email=htmlentities(htmlspecialchars(strip_tags(addslashes(mysqli_real_escape_string($connect,$_REQUEST["email"])))));
$password=htmlentities(htmlspecialchars(strip_tags(addslashes(mysqli_real_escape_string($connect,$_REQUEST["password"])))));

$AuthPass=sha1($password);


$matchQuery="SELECT * FROM login WHERE email='$email' AND password='$AuthPass'";

$runMatchQuery= mysqli_query($connect,$matchQuery);

$chakeCount= mysqli_num_rows($runMatchQuery);

if($runMatchQuery==true){
    if($chakeCount===1){
        setcookie("currentUser",$email,time()+(86400*7));
        header("location:post.php?");


    }
    else{
        header("location:admin.php?wrong");
    }
}


?>