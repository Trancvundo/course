<?php
include 'template/database.php';
include 'template/header.php';
include 'template/menu.php';
?>  


<?php 
echo "<h1>Uitgelogd</h1>";
session_start();
session_destroy();
?>


<?php
include 'template/footer.php';
?>