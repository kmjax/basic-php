<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
      name="description"
      content="PHP Homework Assignment - 2020-12-01"
    />
    <meta name="author" content="Kelsey McClanahan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two PHP Assignments</title>
</head>
<body style="background-color: seagreen; color: azure;">

    <h2>TWO PHP Assignments</h2>
    <hr>
    <h3>Assignment 1</h3>
    <p>Here is a list of numbers between 50 and 100.<br>
    <em>Note, this will start at 51 and end on 99.</em><br></p>

    <p style="font-family: monospace; font-size: 18px;">
<?php

// Use a loop to iterate through numbers between 50 and 100
// and print each number on the screen
for ($i = 51; $i <= 99; $i++) {
    print "$i ";
}
?>
</p>

<br><hr>
<h3>Assignment 2</h3>
    <p>This exercise creates and the uses a function that
    accepts two numbers, and then calculates an area from
    those two numbers.<br>
    <em>Note, the numbers are hard-coded; no user input is 
    provided.</em></p>

    <p style="font-family: monospace; font-size: 18px;">

<?php

// Define function to calculate the area of a rectangle
function calculateArea($w, $h) {
    return $w * $h;
}

// Define variables
$width = 7;
$height = 5;
// Calculate the area
$area = calculateArea($width, $height);

// Display the output to the screen
print "The area of a rectangle that is $width units wide ";
print "and $height units high is $area.";
?>

</p>
    
</body>
</html>