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

  <h1>Pagina Risultati</h1>
    <?php
        $nominativo = $_GET['nomeStudente'];
        $Ndebiti = ""; //variabile per contare i debiti
        if(empty($nominativo)){ 
          header("location: ./errore.php");   //reindirizzamento alla pagina di errore
          exit;
        }else{
          $_SESSION['nominativo'] = $nominativo;
          $esito = "";
          $genere = $_GET['genere'];
            if($genere == 'maschio'){ //verifica se l'alunno è maschio o femmina
               $esito = "<span><b> AMMESSO</b></span>";
            }else{
               $esito = "<span><b> AMMESSA</b></span>";
            }
            //controllo se l'alunno è promosso
            if (isset($_GET['debiti']) && is_array($_GET['debiti'])) {
              $debiti = $_GET['debiti']; // Recupero i debiti dall'index
              for($i=0; $i<count($debiti); $i++){
                $Ndebiti .= $debiti[$i] . " ";
              }
              if (count($debiti) >= 3) {//controllo se è stato promosso
                  echo "<p>risultato di " . $nominativo . "<span><b>: NON </b></span>" . $esito ; "</p>";
              } else {
                  echo "<p>Risultato di " . $nominativo . ":" . $esito . " con debiti in: " . $Ndebiti; "</p>";
              }
          } else {
              echo "<p>Risultato di " . $nominativo . ":" . $esito; "</p>";
          }
        }
    ?>
            
        
       
    
        

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>