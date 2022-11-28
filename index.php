<!-- Ciao a tutti!
Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator
**Descrizione**
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
**Milestone 1**
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*
**Milestone 2**
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale
**Milestone 3**
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
**Milestone 4 (BONUS)**
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
Buon lavoro! :lucchetto: :php: :elefante: -->

<?php
session_start();

include __DIR__ . "/partials/functions.php";
// Chars allowed
$allowedChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?$%&+=@#";

// User password length
$passLength = $_GET['pass-length'] ?? "";

// Password crteation by func passGenerate call
if (!empty($passLength)) {
    $_SESSION["password"] = passGenerate($passLength, $allowedChars);
    var_dump($_SESSION["password"]);
    if ($_SESSION['password']) {
        header("Location: ./result.php");
    }
}

// var_dump($allowedChars);
// var_dump($passLength);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Strong Password Generator</h1>

        <h2 class="text-center">Genera una password sicura</h2>

        <div class="user-interaction rounded p-3">
            <form action="index.php" method="GET">
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="pass-length">Lunghezza password:</label>
                    </div>
                    <div class="col-4">
                        <div class="input-group w-50">
                            <input class="form-control" type="text" id="pass-length" name="pass-length" value="8">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-8">
                        <p>Consenti ripetizioni di più caratteri:</p>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="repeat" name="repeat" value="true">
                            <label class="form-check-label" for="repeat">Sì</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="repeat" name="repeat" value="false">
                            <label class="form-check-label" for="repeat">No</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-8">

                    </div>

                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="letters" name="letters" value="letters">
                            <label class="form-check-label" for="letters">Lettere</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="numbers" name="numbers" value="numbers">
                            <label class="form-check-label" for="numbers">Numeri</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="simbols" name="simbols" vale="simbols">
                            <label class="form-check-label" for="simbols">Simboli</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Invia</button>

                <button class="btn btn-secondary" type="reset">Annulla</button>
            </form>
        </div>
    </div>
</body>

</html>