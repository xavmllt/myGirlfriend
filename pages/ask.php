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
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Galada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/logo.png">
    <link rel="stylesheet" href="../styles/shyOff.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>myGirlfriend</title>
</head>
<body>
    
    <?php include("../components/header.php"); ?>

    <main>

        <p><?= $nom; ?>, wanna be myGirlfriend ? </p>

        <a href="../pages/officialy.php"><button>YES</button></a>
        <button id="buttonNo">NO</button>

        <script>
            $(document).ready(function() {
                $('#buttonNo').on('mouseover', function() {
                    $(this).animate({
                        'top': Math.random() * window.innerHeight + "px",
                        'left': Math.random() * window.innerWidth + "px"
                    }, "medium");
                });
            });
        </script>

    </main>

    <?php include("../components/footer.php"); ?>

</body>
</html>