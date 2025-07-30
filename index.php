<?php

echo 'hello world';


echo "\n";
echo "\n";
echo "*------------- 2 -------------*";
echo "\n";
echo "\n";

$string1 = 'hello';
$string2 = 'world';

echo $string1 .' ' .  $string2;

echo "\n";
echo "\n";
echo "*------------- 3 -------------*";
echo "\n";
echo "\n";

$whitespace = "  white space  ";

$trimWhiteSpace = trim($whitespace);

echo $whitespace; //without trim
echo "\n";
echo $trimWhiteSpace; //with trim

echo "\n";
echo "\n";
echo "*------------- 4 -------------*";
echo "\n";
echo "\n";

$uppercase = "ABCD EFGH";
$lowercase = "abcd efgh";

echo strtoupper($lowercase);
echo "\n";
echo strtolower($uppercase);


echo "\n";
echo "\n";
echo "*------------- 5 -------------*";
echo "\n";
echo "\n";

$capitalize = 'hello world this is shit';

echo $capitalize;