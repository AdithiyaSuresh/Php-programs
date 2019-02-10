<?php
/**********
 *program to find Binary Search of a Tree
 *@authour Adithiya Suresh
 *@version 2.0
 *Date 29/01/2019
 */

/**
 * requried to get input from another class
 */
require_once ('Utility.php');
echo "enter the number of nodes  of a Tree\n";
$num = utility::integer_Input();
/**
 * calculating $numerator value of formulea
 */
$numerator = utility::factorial(2 * $num);

/**
 * calculating  $denominator  vlaue of formulea
 */
$denominator = utility::factorial($num + 1) * utility::factorial($num);

/**
 * calculating number of nodes
 */
$Bst = floor($numerator / $denominator);
echo "number of Bst are possible are \n" . $Bst . "\n";