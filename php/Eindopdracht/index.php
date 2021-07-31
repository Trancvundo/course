<?php
define('DB_HOST',"localhost");
define('DB_PORT', "3307");
define('DB_USERNAME',"root"); 
define('DB_PASSWORD',"root");
define('DB_DATABASE',"Phpcursus"); 
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
if (!$connection) {
  die('Verbinding met de database is mislukt.');
}
?>

<?php
include 'template/header.php';
include 'template/menu.php';
?>

<?php
$query = "SELECT * FROM Page";
$result = mysqli_query($connection, $query);
echo mysqli_num_rows($result);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach($rows as $row){
  echo $row['id'];
  echo $row['title'];
  echo $row['link'];
}
?>

<?php
include 'template/footer.php';
?>
