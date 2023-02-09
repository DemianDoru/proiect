<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meniu mancare</title>
    <link rel="stylesheet" href="/css/meniu-mancare.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      
    </style>
</head>

<body>
<?php 
        @include('header-v.php')
    ?>

    <main>
        <div class="container padding">
            <div class="swiper">
                <h2 class="our-food">Preparatele Noastre</h2>
                <div class="swiper-wrapper">


                    <div class="swiper-slide"><img
                            src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt=""></div>
                    <div class="swiper-slide"><img
                    src="/img/img-food2.png"  alt=""></div>
                    <div class="swiper-slide"><img
                            src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="https://images.unsplash.com/photo-1432139555190-58524dae6a55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80"
                            alt=""></div>
                </div>

                <div class="swiper-pagination"></div>


                <div class="swiper-button-prev" style="color: red;"></div>
                <div class="swiper-button-next" style="color: red;"></div>
            </div>
        </div>
        
            
        <div class="container">
            <div class="menu-food padding">
                <h2>Meniu mâncare</h2>
                <h3 class="h3">Gustări</h3>
                <ul class="list-food">
                    <li class="style-list">Bruschette Mixte <p class="price">18 lei</p>
                    </li>
                    <li class="style-list">Ficat de gâscă în bacon <p class="price">65 lei</p>
                    </li>
                    <li class="style-list">Trio de zacuscă <p class="price">15 lei</p>
                    </li>
                    <li class="style-list">Fritto misto <p class="price">35 lei</p>
                    </li>
                </ul>

                <h3 class="h3">Supe/Creme</h3>
                <ul class="list-food">
                    <li class="style-list">Ciorbă țărănească de văcuță 20lei <p class="price">35 lei</p>
                    </li>
                    <li class="style-list">Ciorbă de burtă <p class="price">20 lei</p>
                    </li>
                    <li class="style-list">Supă de cartofi cu costițe și afumături <p class="price">22 lei</p>
                    </li>
                    <li class="style-list">Supă cremă de dovleac <p class="price">22 lei</p>
                    </li>
                    <li class="style-list">Supă cremă de broccoli <p class="price">22 lei</p>
                    </li>
                </ul>

                <h3 class="h3">Preparate din Porc</h3>
                <ul class="list-food">
                    <li class="style-list">Costițe Vieneze <p class="price">50 lei</p>
                    </li>
                    <li class="style-list">Cotlet de Mangaliță <p class="price">65 lei</p>
                    </li>
                    <li class="style-list"> Ciolan de porc în stil Bavarez 70 lei <p class="price">70 lei</p>
                    </li>
                    <li class="style-list"> Ceafă țigănească <p class="price">40 lei</p>
                    </li>
                </ul>

                <h3 class="h3">Preparate din Miel </h3>
                <ul class="list-food">
                    <li class="style-list">Cotlet de Miel cu piure de mazare 90 lei <p class="price">90 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din </h3>
                <ul class="list-food">
                    <li class="style-list">Pulpă de rață cu varză roșie călită <p class="price">65 lei</p>
                    </li>
                    <li class="style-list">Piept de rață cu piure de păstărnac <p class="price">70 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din vită

                </h3>
                <ul class="list-food">
                    <li class="style-list">Muschi de vită cu ficat de gâscă și hribi <p class="price"> 130 lei</p>
                    </li>
                    <li id="decor-list">Rib eye steak <p class="price">40lei/100gr</p>
                    </li>
                    <li id="decor-list">Șnițtel Vienez <p class="price">70 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din pește</h3>
                <ul class="list-food">
                    <li class="style-list">File de somon în crustă cu piure de păstărnac <p class="price">80 lei </p>
                    </li>
                    <li class="style-list">Biban la cuptor cu legume nobile <p class="price">70 lei </p>
                    </li>
                    <li class="style-list">File de șalău cu legume la grătar <p class="price">65 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din Pasăre</h3>
                <ul class="list-food">
                    <li class="style-list">Piept de pui cu sos Gorgonzola <p class="price">50 lei</p>
                    </li>
                    <li class="style-list">Piept de pui Crispy <p class="price">45 lei</p>
                    </li>
                    <li class="style-list">Aripioare crocante <p class="price">50 lei</p>
                    </li>
                    <li class="style-list">Piept de pui Teryaki <p class="price">50 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Salate</h3>
                <ul class="list-food">
                    <li class="style-list">Salată caesar <p class="price">40 lei </p>
                    </li>
                    <li class="style-list">Salata halloumi <p class="price">42 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Desert</h3>
                <ul class="list-food">
                    <li class="style-list">Pavlova <p class="price">20 lei</p>
                    </li>
                    <li class="style-list">Lava cake <p class="price">20 lei</p>
                    </li>
                    <li class="style-list">Tiramisu <p class="price">19 lei</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php
        @include('footer.php')
    ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



    <script>

        const swiper = new Swiper('.swiper', {



            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },


            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>


</body>

</html>