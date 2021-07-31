<?php
$query = "SELECT * FROM Page";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo '<ul>';
foreach($rows as $row){
  echo '<li><a href="'. $row['link'] . '" title="' . $row['title'] . '">' . $row['title'] . '</a></li>';
}
echo '</ul>';