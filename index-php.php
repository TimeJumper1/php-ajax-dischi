<?php
require __DIR__ . '/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        logo spotify e colore più chiaro
    </header>
    <main>
        <div class="container">
            <?php foreach($database as $discInfo) {?>
            <div class="single-card">
                <div class="img-container">
                    <img src="<?php echo $discInfo['poster'] ?>" alt="">
                </div>
                <h3><?php echo $discInfo['title'] ?></h3>
                <h4><?php echo $discInfo['author'] ?></h4>
                <h4><?php echo $discInfo['year'] ?></h4>
            </div>
            
            
            <?php }?>
        </div>
    </main>

</body>
</html>