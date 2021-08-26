<?php
require_once('config.php');

if(isset($_REQUEST["post"])){
    $postName=$_REQUEST["postName"];


    $picture=explode(".",$_FILES["picture"]["name"]);
    $picture=end($picture);
    $picture=rand().".".$picture;


    $insertQuery="INSERT INTO `math`(`postName`, `video`) VALUES ('$postName','$picture')";

    $runQuery=mysqli_query($connect,$insertQuery);

    if($runQuery){
        move_uploaded_file($_FILES['picture']['tmp_name'],'math_videos/'.$picture);
    }

    if($runQuery==true){
        header("location:post.php?math_right");
    }
    else{
        echo 'Data DO not Inserted';
    }
}

?>