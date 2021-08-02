<?php
include 'template/database.php';
include 'template/header.php';
include 'template/menu.php';
?>

<?php
session_start();
if(isset($_SESSION['status'])): ?>
  <h1>Admin page<?php echo $_SESSION['status']; ?></h1>
  <a href="logout.php" title="Uitloggen">Uitloggen</a>
  <br>
  <h1>Delete</h1>
  <form method="post">
    <br>
    <label>ID:</label>
    <br>
    <input type="number" name="ID">
    <br>
    <br>
    <input type="submit" value="Verzenden">
    <br>
  </form>
  
  <?php
  session_start();
  ini_set('error_reporting', E_ALL); 
  ini_set('display_errors', 1);

  if(isset($_POST['ID'])) {
    $ID = $_POST['ID'];
    $sql = "DELETE FROM article WHERE id='$ID'";
    if (mysqli_query($connection, $sql) === TRUE) {
        echo "Delete record successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
  }
  

  ?>
<?php else: 
    header('location: index.php');
    ?>
    
<?php endif; ?>


<?php
include 'template/footer.php';
?>

