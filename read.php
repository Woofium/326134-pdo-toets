<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, bodemfoormaat, saus, pizzatoppings, kruiden FROM pizza");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    $tableRows = "";
    
    foreach ($stmt->fetchAll() as $key=>$value) {
        $tableRows .= "<tr>
        <td>$value->id</td>
        <td>$value->bodemfoormaat</td>
        <td>$value->saus</td>
        <td>$value->pizzatoppings</td>
        <td>$value->kruiden</td>
        <td> <a href='update.php?id=$value->id'> <i class=;bi bi-pencil-square'></i></></td>
        <td> <a href='delete.php?id=$value->id'> <i class=;bi bi-x-circle'></i></></td>
        </tr>";
    }

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  } 
  $conn = null;
  echo "</table>";
  ?>
<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PDO Toets</title>
  </head>
  <body>
  
    <main class="container">
      <div class="row text-center">
        <div class="col-12">
          <h1>Maak je eigen pizza</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>bodemfoormaat</th>
                    <th>saus</th>
                    <th>pizzatoppings</th>
                    <th>kruiden</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?= $tableRows; ?>
            </tbody>
        </table>
    </div>
        <div class="col-3"></div>
    </div>
    </main>
    </body>
</html>
