<?php
// DATABASE DISCHI

include 'database_dischi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <header id="app_header">
        <nav>
            <img src="./img/Spotify-Symbol.png" alt="">
        </nav>
    </header>


    <main id="app_main">
        <div id="main_container_one">
        <?php foreach ($database as $album) : ?>
            <div id="card_album">
                <?php echo $album["Poster"]; ?>
                <h3><?php echo $album["Title"]; ?></h3>
                <?php echo $album["Artist"]; ?>
                <?php echo $album["Year"]; ?>
            </div>
            <?php endforeach ?>
        </div>

    </main>


</body>
</html> 
