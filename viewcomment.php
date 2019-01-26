<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
</head>
<body>
<?php

$mycomment=fopen("/home/Sherryqin/module2/group/comment.txt", "r");

echo"all comment:";


while(!feof($mycomment)){
    $comment=trim(fgets($mycomment));
    echo $comment;
    echo "<br/>";
}
fclose($mycomment);

echo'<a href="login.html">back to login page</a>';

?>
</body>
</html>