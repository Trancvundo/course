
<?php
$students  = array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
);
$i = 0;
$id = array("210210","123456","156458");

echo "<table>";
echo "<tr>" . "<th>Firstname</th>" . "<th>Score</th>" . "<th>Lastname</th>" . "<th>id_number</th>" . "</tr>";
foreach($students  as $row) {
    echo "<tr>";
    $row[] = $id[$i];
    $i++;
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// In array zetten
echo "<br>";

$i = 0;
$new = array();
foreach($students as $student) {
    $i++;
    $student['id'] = $i;
    $new[] = $student;
}
$students = $new;
print_r($students);



?>
