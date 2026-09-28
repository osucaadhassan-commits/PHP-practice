<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$colors = array(
    "Light" => array("Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark" => array("Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue")
);

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr bgcolor='#f2f2f2'>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
      </tr>";

foreach ($colors as $rowName => $colArray) {
    echo "<tr>";
    echo "<td><b>" . $rowName . "</b></td>";
    foreach ($colArray as $colName => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>