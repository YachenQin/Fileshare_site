<?php

session_start();
if(!isset($_GET['file'])){
    header("Location:wrong_input.html");
}
if((!isset($_GET['open']))&&(!isset($_GET['delete']))){
    header("Location:wrong_input.html");
}
$username=$_SESSION['username'];
$filename=$_GET['file'];

$path=sprintf("/home/Sherryqin/module2/group/%s/%s",$username,$filename);
if( !preg_match('/^[\w_\-]+$/', $username) ){
    echo "Invalid username";
    exit;
}
if(isset($_GET['open'])){
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($path);
    header("Content-Type: ".$mime);
    readfile($path);
}
else{
    unlink($path);
    header("Location:delete_success.html");
}
?>

