<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE pizza 
          SET bodemfoormaat = :bodemfoormaat,
              saus = :saus,
              pizzatoppings = :pizzatoppings,
              kruiden = :kruiden,
              WHERE id= :id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':bodemfoormaat', $bodemfoormaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatoppings', $pizzatoppings);
  $stmt->bindParam(':kruiden', $kruiden);
  $stmt->bindParam(':id', $id);


  $bodemfoormaat = $_POST["bodemfoormaat"];
  $saus = $_POST["saus"];
  $pizzatoppings = $_POST["pizzatoppings"];
  $kruiden = $_POST["kruiden"];
  $id = $_POST["id"];

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo "record met id{$id} is gewijzigd";
  header("Refresh:2; ./read.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>