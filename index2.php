<?php
//conditionals

$age = 17;
 if($age >= 18) {
    echo 'You are enough to vote';
 } else {
    echo 'Sorry, you are not enough to vote';
 }

// day and month , (hour of the day -H), (day and month - F j)

 $t = date("H");

 if($t < 12) {
    echo 'Good Morning';
 } elseif($t < 17) {
    echo 'Good Afternoon';
 } else {
    echo 'Good Evening';
 }

// Switch funcion
 $favcolor = 'red';

 switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
     case 'green':
        echo 'Your favorite color is green';
        break;
        default:
        echo 'Your favorite color is not red, green or blue';
 }