<?php
require_once('config.php');

if(isset($_REQUEST["post"])){
    $subject=$_REQUEST["subject"];
    $notice=$_REQUEST["notice"];


    $insertQuery="INSERT INTO `notice`(`subject`,`notice`) VALUES ('$subject','$notice')";

    $runQuery=mysqli_query($connect,$insertQuery);


    if($runQuery==true){
        header("location:post_notice.php?right");
    }
    else{
        echo 'Data DO not Inserted';
    }
}

?>