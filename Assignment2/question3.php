<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
// Declare a 2D associative array
$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhigley"),
    "CA207" => array("Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA202" => array("Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Masracanka, Dharkeynley")
);

// Display the array in an HTML table format
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr bgcolor='#f2f2f2'>
        <th></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>";

foreach ($students as $studentId => $details) {
    echo "<tr>";
    echo "<td><b>" . $studentId . "</b></td>";
    echo "<td>" . $details["Name"] . "</td>";
    echo "<td>" . $details["Phone"] . "</td>";
    echo "<td>" . $details["Address"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>