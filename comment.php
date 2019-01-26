<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
</head>
<body>
<?php
$comment = $_POST["comment"];

echo $comment;

$comment2='<br/>';


$mycomment=fopen("/home/Sherryqin/module2/group/comment.txt", "a+");

fwrite($mycomment,$comment);
fwrite($mycomment,$comment2);

echo'<br/>';
echo'<label>has been record</label>';
echo'<a href="login.html">back to login page</a>';

?>
</body>
</html>