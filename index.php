<?php



function nextCahr($char){
$next_char = ++$char; 
if (strlen($next_char) > 1) 
{
 $next_char = $next_char[0];
 }
echo $next_char."<br>";
}

nextCahr('c');