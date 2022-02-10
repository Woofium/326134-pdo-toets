<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM pizza WHERE id=:id";

  $stmt = $conn->prepare($sql);
  $stmt_>bindParam(':id', $id);

  if (!isset($_GET['id'])) {
      header("Location: ./index.php");
      exit();
  }

  $id = $_GET['id'];

  // use exec() because no results are returned
  $stmt->execute();
  echo "Record deleted successfully";
  header('Refresh:2; .read.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>