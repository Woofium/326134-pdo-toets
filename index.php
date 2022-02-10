<!doctype html>
<html lang="en">
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
    <form class="border-bottom border-dark p-2">
      <div class="row text-center">
        <div class="col-12">
          <h1>Maak je eigen pizza</h1>
        </div>
    </div>
    <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">

    <form action="./create.php" method="post">
        <label for="inputInfix" class="form-label">Bodemfoormaat</label>
          <div class="input-group mb-3">
            <select class="custom-select" id="InputBodemfoormaat">
                <option selected>Maak je keuze</option>
                <option value="1">20</option>
                <option value="2">25</option>
                <option value="3">30</option>
                <option value="3">35</option>
                <option value="3">40</option>
            </select>
        </div>

        <label for="inputInfix" class="form-label">Saus</label>
          <div class="input-group mb-3">
            <select class="custom-select" id="InputSaus">
                <option selected>Maak je keuze</option>
                <option value="1">Tomatensaus</option>
                <option value="2">Extra tomatensaus</option>
                <option value="3">Spicy tomatensaus</option>
                <option value="3">BBQ saus</option>
                <option value="3">Creme fraiche</option>
            </select>
        </div>

        <div>
                Pizzatoppings
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pizzatoppings" id="InputPizzatoppings">
            <label class="form-check-label" for="pizzatoppings1">
            Vegan
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pizzatoppings" id="InputPizzatoppings">
            <label class="form-check-label" for="pizzatoppings2">
            Vegetarisch
        </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pizzatoppings" id="InputPizzatoppings">
            <label class="form-check-label" for="pizzatoppings3">
            Vlees
        </label>
        </div>
        
                Kruiden
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="InputKruiden">
        <label class="form-check-label" for="kruiden1">
            Peterselie
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="InputKruiden">
        <label class="form-check-label" for="kruiden2">
            Oregano
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="InputKruiden">
        <label class="form-check-label" for="kruiden3">
            Chili flakes
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="InputKruiden">
        <label class="form-check-label" for="kruiden4">
            Zwarte peper
        </label>
        </div>

      <div class="mb-3">
      <a class="form-control btn btn-primary" type="sumbit" href="./create.php">Bestel</a>
     
      </div>
    </main>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>