<?php
include 'template/database.php';
include 'template/header.php';
include 'template/menu.php';
?>

<?php
$query = "SELECT * FROM Article LIMIT 10";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($rows as $row){
  echo $row['id'];
  echo '<br>';
  echo $row['title'];
  echo '<br>';
  echo $row['context'];
  echo '<br>';
}
?>

<?php
include 'template/footer.php';
?>