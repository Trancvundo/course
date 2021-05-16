
<?php
$students  = array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
);

echo "<table>";
echo "<tr>" . "<th>Firstname</th>" . "<th>Score</th>" . "<th>Lastname</th>" . "</tr>";
$score = array_column($students, 'score');
$test = array_multisort($score, SORT_ASC, $students);
$i = 0;

foreach($students  as $row) {
    if ($i == 2){
        echo "<tr style='background:#3f9a0e'>";
    }else{
        echo "<tr>";
    }
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
    $i = $i + 1;
}
echo "</table>";
?>
