<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO pizza (id, bodemfoormaat, saus, pizzatoppings, kruiden)
                                VALUES (:id, :bodemfoormaat, :saus, :pizzatoppings, :kruiden)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':bodemfoormaat', $bodemfoormaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatoppings', $pizzatoppings);
  $stmt->bindParam(':kruiden', $kruiden);

  // insert a row
  $id = NULL;
  $bodemfoormaat = $_POST["bodemfoormaat"];
  $saus = $_POST["saus"];
  $pizzatoppings = $_POST["pizzatoppings"];
  $kruiden = $_POST["kruiden"];

   // var_dump($stmt->queryString);

  $stmt->execute();

  echo "New records created successfully";
  header("Refresh:3; ./read.php");
} catch(PDOException $e) {
  echo $e->getMessage();
  header("Location: ./index.php");
}
$conn = null;
?>
