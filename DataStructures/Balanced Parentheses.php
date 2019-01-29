<?php
/**
 * runner Program to check the working of the function BalParenthesis in utility
 */

 //require following function to work  
require 'Stack.php'; 
require 'Utility.php'; 
//creating a new stack
$stack = new Stack();
$str = "";
// getting input from user
echo "enter the arithmetic expression\n";
$str = Utility::string_Input();
//pushing and poping from the stack acc to characters
for($x=0;$x<strlen($str);$x++)
{
    $ch = $str[$x];
    if($ch == '(')
    {
        $stack->push($ch);
    }
    else if($ch == ')')
    {
        $stack->pop();
    }
}
//checking is equation is balanced
if($stack->isEmpty())
{
    echo "balanced\n";
}
else
{
    echo "not balanced\n";
}
?>