<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);


echo "1) Array elements: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br><br>";


$totalSum = 0;
$evenSum = 0;
$oddSum = 0;


$minVal = $numbers[0];
$maxVal = $numbers[0];


foreach ($numbers as $num) {
    
    $totalSum += $num;
    
   
    if ($num % 2 == 0) {
        $evenSum += $num;
    } else {
        $oddSum += $num;
    }
    
    
    if ($num < $minVal) {
        $minVal = $num;
    }
    if ($num > $maxVal) {
        $maxVal = $num;
    }
}


$minPositions = array();
$maxPositions = array();

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $minVal) {
        $minPositions[] = $i;
    }
    if ($numbers[$i] == $maxVal) {
        $maxPositions[] = $i;
    }
}


echo "2) Total of all elements: " . $totalSum . "<br>";
echo "3) Total of even elements: " . $evenSum . "<br>";
echo "4) Total of odd elements: " . $oddSum . "<br>";
echo "5) Minimum element: " . $minVal . " (Position(s): " . implode(", ", $minPositions) . ")<br>";
echo "6) Maximum element: " . $maxVal . " (Position(s): " . implode(", ", $maxPositions) . ")<br>";
?>
</body>
</html>
