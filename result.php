<?php
session_start();
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

        <h2 class="text-center">Password generata:</h2>

        <?php
        echo ('<div class="alert alert-success">' . $_SESSION['password'] . '</div>');
        ?>

        <h1 class="text-center">Strong Password Generator</h1>

        <a href="index.php">
            <button class="btn btn-secondary">Torna alla home page</button>
        </a>
    </div>
</body>

</html>