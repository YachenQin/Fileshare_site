<?php
session_start();

$filename = basename($_FILES['uploadedfile']['name']);

if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
    echo "Invalid filename";
    header("Location: mainpage.php");
    exit;
}

$username = $_SESSION["username"];
if( !preg_match('/^[\w_\-]+$/', $username) ){
    echo "Invalid username";
    header("Location: mainpage.php");
    exit;
}

$full_path = sprintf("/home/Sherryqin/module2/group/%s/%s", $username, $filename);

if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
	header("Location: mainpage.php");
    exit;
}else{
    exit;
}

?>