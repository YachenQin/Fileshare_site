<?php
session_start();
$h = fopen("/srv/user.txt", "r");
$username=$_POST["Username"];
$linenum=0;

while( !feof($h) ){
    $targetfile=trim(fgets($h));
    if (empty($username)){
        echo "Please enter the username!";
        break;
    }
    if(empty($targetfile)){
        echo"the username file is empty!";
        break;
    }
    if($targetfile==$username){
        $_SESSION["username"]=$username;
        header( "location:mainpage.php" );
        break;
    }
    else{
        $linenum=$linenum+1;
    }
}
if($linenum==3){
    echo"the username you enter is invalid, please try again after 5sec";
    header("refresh:5,url=login.html");
}
fclose($h);
?>