<?php
$host = 'localhost';
$user = 'root';
$pass = '!R!s251113';

mysql_connect($host, $user, $pass);

mysql_select_db('Profile');

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO Infos VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);
?>