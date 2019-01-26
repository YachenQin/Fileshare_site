<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mainpage</title>
    <link href="file.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
session_start();
$username = $_SESSION['username'];

if (!empty($username)){
$directory = sprintf("/home/Sherryqin/module2/group/%s", $username);
$dh  = opendir($directory);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
}
sort($files);

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo '<form action = "ViewOrDelete.php" method = "get" class="deleteAndView">';
echo '<label class="font">Welcome:',$username,'</label>';
echo "<label class='font'>Files you have:</label>";
echo "<br/>";

for($i = 2; $i < sizeof($files); $i++){
    echo'<input type="radio" value=',$files[$i];
	echo' name="file" class="filefont">',$files[$i];
	echo "<br/>";
}

echo '<input type="submit" name = "open" value="open" class="open"> <br>';
echo '<input type ="submit" name = "delete" value="delete" class="delete"> ';

echo '</form>';
}
?>
	<br/>
	<br/>
	<br/>
    
	<form enctype="multipart/form-data" action="uploader.php" method="POST" class="button1">
    	<p class="position1">
        	<input type="hidden" name="MAX_FILE_SIZE" value="20000000" class="uploadfile" />
        	<label for="uploadfile_input" class="upload3">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input"  class="upload3"  />
    	</p>
    	<p class="position2">
        	<input type="submit" value="Upload File" class="uploadfile" >
    	</p>
	</form>
    <br/>
    <br/>
    
    <form action="logout.php" method="POST" class="button1">
        <p class="position6">
            <input type="submit" name="logout" value="logout" class="uploadfile" />
        </p>
    </form>



</body></html>