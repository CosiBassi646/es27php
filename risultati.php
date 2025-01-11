<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-danger text-center">ESITI DEGLI SCRUTINI:</h1>
    <div class="p-3 mb-2 bg-success-subtle text-success-emphasis w-50 my-auto mx-auto ">
  <?php


if (isset($_SESSION['esitiStudenti'])) { //controllo se l'array contiene elementi
    // Recupero l'array dalla sessione
    $studenti = $_SESSION['esitiStudenti'];

    // Stampa l'intero array
    for($i=0; $i<count($studenti); $i++) {
        echo $studenti[$i] ;
    }

} else {
    echo "Nessun dato disponibile.";
}
session_abort();//termina la sessione
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>