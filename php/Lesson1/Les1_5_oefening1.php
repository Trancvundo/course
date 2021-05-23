
<?php

$students  = array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
);

echo "<table>";
echo "<tr>" . "<th>Firstname</th>" . "<th>Score</th>" . "<th>Lastname</th>" . "</tr>";
foreach($students  as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

//array_keys kan keys als header gebruiken 
//functie maken
echo "<br>";


function arrayTable($matrix){
    $html = '<table border="1">';
    foreach(array_keys($matrix[0]) as $header) {
        $html .= '<th>' . $header . "</th>";
    }
    
    foreach($matrix as $row) {
        $html .= "<tr>";
        foreach($row as $cell) {
            $html .= "<td>" . $cell . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}

echo arrayTable($students);


?>
