<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Galada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../assets/logo.png">
    <link rel="stylesheet" href="../styles/nickName.css">
    <script src="../scripts/recupNickName.js" defer></script>
    <title>myGirlfriend</title>
</head>
<body>

    <?php include("../components/header.php"); ?>

    <main>

        <form action="">
            <label for="name">but first <span><?=$nom = $_GET['nom']; ?></span> please, tell me, what’s your favorite nickname ?</label>
            <div class="sameRow">
                <input type="text" name="name" id="nickname" value="">
                <input type="submit" value="&#10132;" id="submit">
            </div>
        </form>

    </main>

    <?php include("../components/footer.php"); ?>

</body>
</html>