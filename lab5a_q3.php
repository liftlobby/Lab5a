<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    
    function cal(float $length, float $width): float
    {
        $area = $length * $width;
        return ($area);
    }
     
    $length = 4;
    $width = 2;
    $area = cal($length, $width);
    echo ("<p>" . "The area of a rectangle with a width of " . $length . " and " . $width . " is " . $area . "</p>");
    ?>
</body>
</html>