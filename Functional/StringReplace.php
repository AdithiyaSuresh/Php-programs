<?php
/** program to replace the string with user input **/
include 'Utility.php';
$str1 = "Hello UserName, how are you";
$str2 = "UserName";
echo "enter the username \n";

//taking user input
$str3 = Utility::taking_String_Input();

//calling function to replace string
echo Utility::string_Replace($str1,$str2,$str3)."\n";

?>

