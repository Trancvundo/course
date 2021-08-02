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