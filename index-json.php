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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <header>
        <img class="logo" src="img/logo-small.svg" alt="">
    </header>
    <main >
        <div id="root">
            <div class="container">
                <div v-for="(discInfo, index) in disc" class="single-card">
                    <div class="img-container">
                        <img :src="discInfo.poster" alt="">
                    </div>
                    <h3>{{ discInfo.title}}</h3>
                    <h4>{{ discInfo.genre}}</h4>
                    <h4>{{ discInfo.year}}</h4>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>