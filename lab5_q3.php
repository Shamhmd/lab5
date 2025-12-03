<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

<?php
// Function to calculate area of a rectangle
function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

// Call the function with any values
$length = 4;
$width = 2;
$result = calculateArea($length, $width);

echo "The area of a rectangle with width $width and $length is $result";
?>

</body>
</html>
