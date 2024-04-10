<?php
session_start();
$nom = $_SESSION['nom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Galada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/shyOff.css">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <script src="../scripts/officialy.js" defer></script>
    <title>myGirlfriend</title>
</head>
<body>
    
    <?php include("../components/header.php"); ?>

    <main>

        <p>Xavier + <?= $nom; ?> is officialy !! 💍</p>

        <button id="button">💖</button>

        <div id="message"></div>

    </main>

    <?php include("../components/footer.php"); ?>
</body>
</html>