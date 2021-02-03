<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/assets/css/style.css">
    <title>Document</title>
</head>
<body>
  
    <div id="app">
        <header id="app_header">
            <nav>
                <img src="./img/Spotify-Symbol.png" alt="">
            </nav>
        </header>


        <main  id="app_main">
            <div  id="main_container_one">
            
                <div v-for = 'disc in discs' id="card_album">
                    <img :src="disc.Poster" alt="">
                    <h3>{{ disc.Title}}</h3>
                    <h5>{{ disc.Artist}}</h5>
                    <p>{{disc.Year}}</p>
                </div>
                
            </div>

        </main>
    </div>
    

<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="./dist/assets/js/main.js"></script>
</body>
</html> 
