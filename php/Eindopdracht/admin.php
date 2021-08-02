<?php
include 'template/database.php';
include 'template/header.php';
include 'template/menu.php';
?>

<?php
session_start();
if(isset($_SESSION['status'])): ?>
  <h1>Admin page<?php echo $_SESSION['status']; ?></h1>
  <a href="delete.php" title="Delete">Delete</a>
  <a href="logout.php" title="Uitloggen">Uitloggen</a>
  <br>
  <h1>Nieuw Artikel or Update</h1>
  <form method="post">
    <br>
    <label>ID:</label>
    <br>
    <input type="number" name="ID">
    <br>
    <label>Title:</label>
    <br>
    <input type="text" name="title">
    <br>
    <label>Context:</label>
    <br>
    <input type="text" name="context">
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
    if($_POST['ID'] && $_POST['title'] && $_POST['context']){
        $query = "SELECT * FROM article";
        $result = mysqli_query($connection, $query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $ID = $_POST['ID'];
        $title = $_POST['title'];
        $context = $_POST['context'];
        foreach($rows as $row){
            if ($row['id'] == $ID){
                $sql = "UPDATE article SET title='$title', context='$context' WHERE id='$ID'";
                if (mysqli_query($connection, $sql) === TRUE) {
                    echo "Updated record successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $connection->error;
                }
                exit;
            }
        }
        $sql = "INSERT INTO article (id, title, context) VALUES ('$ID','$title','$context')";
        if (mysqli_query($connection, $sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
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

