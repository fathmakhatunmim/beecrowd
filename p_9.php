<?php

// Prompt the user for input
echo "Please enter a double value: ";

// Read the input from the terminal
$inputValue = readline();

// Cast the input string to a float
$doubleValue = (float)$inputValue;

// Display the entered value and its type
echo "You entered: " . $doubleValue . "\n";
echo "Type of the entered value: " . gettype($doubleValue) . "\n";

?>