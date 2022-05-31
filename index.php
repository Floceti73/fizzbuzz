<?php
$counter = 1;
while ($counter <= 100) {
if ($counter % 5 == 0 AND $counter % 3 == 0) {
    echo "FizzBuzz";
    
    } elseif ($counter % 3 == 0) {
    echo "Fizz";
    
    } elseif ($counter % 5 == 0) {
    echo "Buzz";
    } else {
    echo $counter;
    }
   echo "<br>";
   $counter++;
}