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
echo "*------------- For loop refresh -------------*";
echo "\n";
echo "\n";



for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= $i; $j++){
        echo '*' . ' ';
       
    }
    echo "\n";
}

echo "\n";

for($i = 1; $i <= 5; $i++){
   for($j = 5; $j >= $i; $j--){
        echo '*' . ' ';
   }
   echo "\n";
}

echo "\n";
echo "\n";
echo "*------------- 5 -------------*";
echo "\n";
echo "\n";

$students = "alice;bob;charlie;diana;ethan";

$explode = explode(";", $students);

foreach($explode as &$name){
  
 $g = ucfirst($name);
 
 print_r($g ."\n");
}



echo "\n";
echo "\n";
echo "*------------- 6 -------------*";
echo "\n";
echo "\n";

$con1 = 'number';
$con2 = 101;

echo $con1 . $con2;


echo "\n";
echo "\n";
echo "*------------- 7 -------------*";
echo "\n";
echo "\n";


$float = 10.12;
$string = "hello world";


echo $float . $string;

echo "\n";
echo "\n";
echo "*------------- 8 -------------*";
echo "\n";
echo "\n";

$boolean = true;
$string2 = "hello world";

echo $boolean . $string2;
