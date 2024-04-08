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
    <link rel="stylesheet" href="../styles/page2.css">
    <title>myGirlfriend</title>
</head>
<body>
    
    <?php include("../components/header.php"); ?>

    <main>
        <h1>Hey <?= $nom = $_GET['nom']; ?> 😊</h1>

        <p>Don't panic, you just have to answer a few questions !</p>

        <button><a href="pages/page3.php"></a>Ready</button>

    </main>

    <?php include("../components/footer.php"); ?>
</body>
</html>