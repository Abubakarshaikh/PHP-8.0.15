

<?php
// Create a program that asks the user to enter their 
// name and their age. Print out a message that tells how many years 
// they have to be 100 years old

    $name = readline("ENTER YOUR NAME: ");
    $age = (int)readline("ENTER YOUR AGE: ");

    echo "$name YOU HAVE ", 100 - $age , " YEARS TO BE 100 YEARS OLD"; 
?>