<?php require 'header.php' ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="glide-3.4.1/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="glide-3.4.1/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="films.css">
    <title>Hollywood News</title>
  </head>
  <body>
        <div class="container-fluid">
            <h1 style="text-align:center">Catch me</h1>
        </div>
        <div class="container" >
            <div class="row">
                <div class="col" style="margin-left:-10px">
                <img class="img-fluid" src="filmsforsite/catchme.jpg" style="max-width:100%">
                    <img class="img-fluid" src="filmsforsite/catchme.jpg" style="max-width:100%">
                    <img class="img-fluid" src="filmsforsite/catchme.jpg" style="max-width:100%">
                    <img class="img-fluid" src="filmsforsite/catchme.jpg" style="max-width:100%">
                </div>
                <div class="col" style="margin-top:150px" >
                <p style="margin-left: 140px">
                Écrit par Alan Ball, le film raconte l'histoire de la famille Burnham, banale au premier abord, mais qui se déchire de plus en plus.</br>
                Pays d’origine : États-Unis</br>
                Genre : Comédie dramatique</br>
                Titre québécois : Beauté américaine</br>
                Durée : 122 minutes</br>
                </p>
                </div>
            </div> 
        </div>

            <div class="glide">

                <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide" style="text-align:center"><a href="americanbeauty.php"><img src="filmsforsite/americanbeauty.jpg" width="200px" style="border-radius:10px;"></a></li>
                            <li class="glide__slide"style="text-align:center"><a href="american.php"><img src="filmsforsite/american.jpg" width="200px" style="border-radius:10px;"></a></li>    
                            <li class="glide__slide" style="text-align:center"><a href="carlito.php"><img src="filmsforsite/carlito.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="casino.php"><img src="filmsforsite/casino.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="catchme.php"><img src="filmsforsite/catchme.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="city.php"><img src="filmsforsite/city.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="clockwork.php"><img src="filmsforsite/clockwork.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="fightclub.php"><img src="filmsforsite/fightclub.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="goodfellas.php"><img src="filmsforsite/goodfellas.jpg" width="200px" style="border-radius:10px;"></a></li>  
                            <li class="glide__slide" style="text-align:center"><a href="heat.php"><img src="filmsforsite/heat.jpg" width="200px" style="border-radius:10px;"></a></li>
                        </ul>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

        







    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        const myVar = {
            type: 'carousel',
            perView: 4,
            breakpoints: { 
                1100: {
                perView: 4
                },
                1000: {
                perView: 3
                },
                800: {
                perView: 2
                },
                600: {
                perView: 1
                }

            }
        }
        new Glide('.glide',myVar).mount();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>