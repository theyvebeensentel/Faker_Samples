<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Triangle Sides Input Form</h2>
    <form action="index.php" method="POST">
        <label for="side1">Side 1:</label>
        <input type="number" id="side1" name="side1" required><br><br>

        <label for="side2">Side 2:</label>
        <input type="number" id="side2" name="side2" required><br><br>

        <label for="side3">Side 3:</label>
        <input type="number" id="side3" name="side3" required><br><br>

        <input type="submit" value="Calculate"> <br><br>
    </form>  
</body>
</html>
<?php
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];

    $s = ($side1 + $side2 + $side3)/2;
    $area_t = ($s * ($s - $side1) * ($s - $side2) * ($s - $side3))** 0.5;
    $area = number_format($area_t,2);

    echo "Result: {$area}";
?>

