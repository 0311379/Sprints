<?php

print "<p>Lab 1.05</p>";


$getallen = [];
$getallen[0] = "een";
$getallen[1] = "twee";
$getallen[2] = 3;
$getallen[3] = "vier";


array_push($getallen, 5);


print "Stap 3. ";
print_r($getallen);


print "<br> Stap 4. Datatype is: ";
var_dump($getallen[4]);


$laatsteElement = array_pop($getallen);


print "<br> Stap 6. ";
print_r($getallen);

array_unshift($getallen, "nul");


print "<br> Stap 8. ";
print_r($getallen);

unset($getallen[0]);

"<br>Stap 10. ".var_dump($getallen[0]);

$eersteElement = array_shift($getallen);

print "<br> Stap 12. ";
print_r($getallen);


unset($getallen[1]);


print "<br> Stap 14. ";
print_r($getallen);


unset($getallen[3]);


print "<br>Stap 16. ";
print_r($getallen);