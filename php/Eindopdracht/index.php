<?php
include 'template/database.php';
include 'template/header.php';
include 'template/menu.php';
?>

<?php
session_start();
if(isset($_SESSION['status'])): ?>
  <h1>Welkom terug <?php echo $_SESSION['gebruikersnaam']; ?></h1>
  <a href="admin.php" title="Admin">Admin</a></li>
  <a href="logout.php" title="Uitloggen">Uitloggen</a></li>
<?php else: ?>
  <h1>Admin Login</h1>
  <form method="post">
    <br>
    <label>Gebruikersnaam:</label>
    <br>
    <input type="text" name="gebruikersnaam">
    <br>
    <label>Wachtwoord:</label>
    <br>
    <input type="text" name="wachtwoord">
    <br>
    <br>
    <input type="submit" value="Verzenden">
    <br>
  </form>
  
  <?php
  session_start();
  $admin = "Jaap";
  $pass = "Admin123";
  ini_set('error_reporting', E_ALL); 
  ini_set('display_errors', 1);

  if(isset($_POST['gebruikersnaam'])){
    echo "For admin only";
    if($_POST['gebruikersnaam'] == $admin && $_POST['wachtwoord'] = $pass){
      $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
      $_SESSION['wachtwoord'] = $_POST['wachtwoord'];
      $_SESSION['status'] = "ingelogd";
      header('location: index.php');
      exit;
    }
  }
  

  ?>
<?php endif; ?>


<?php
include 'template/footer.php';
?>
