<?php
        include 'Utility.php';
        $str1 = "Hello UserName, how are you";
        $str2 = "UserName";
        echo "enter the username \n";
        $str3 = Utility::taking_string_input();  
         echo Utility::string_replace($str1,$str2,$str3)."\n";
        
?>

