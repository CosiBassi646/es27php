<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>es27</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="text-danger text-center">SCRUTINIO</h1>

    <form action = "./session.php" >
        <div class=" w-50 mx-auto my-auto border rounded-1 mx-auto p-2">
            <h3>Nominativo: </h3>
            <input type="text" class="form-control" name="nomeStudente" id="nomeStudente">
            <br>
            <h3>Genere:</h3>
            <div class="w-50 my-auto my-auto">
                <input type="radio"  name="genere" value="maschio">
                <label for="maschio">M</label><br>
                <input type="radio"  name="genere" value="femmina">
                <label for="femmina">F</label><br>
            </div>
            <br>
            <h3>Debiti:</h3>
            <div class="w-50 my-auto my-auto">
                <input type="checkbox" id="ita" name="debiti[]" value="italiano">
                <label for="ita">Italiano</label>
                <input type="checkbox" id="mate" name="debiti[]" value="matematica">
                <label for="mate">Matematica</label>
                <input type="checkbox" id="info"  name="debiti[]" value="informatica">
                <label for="info">Informatica</label>
                <input type="checkbox" id="telecom" name="debiti[]" value="telecomunicazioni">
                <label for="telecom">Telecomunicazioni</label>
                <br>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Fine Scrutinio</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>