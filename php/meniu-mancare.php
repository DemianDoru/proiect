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
                <h2>Meniu m??ncare</h2>
                <h3 class="h3">Gust??ri</h3>
                <ul class="list-food">
                    <li class="style-list">Bruschette Mixte <p class="price">18 lei</p>
                    </li>
                    <li class="style-list">Ficat de g??sc?? ??n bacon <p class="price">65 lei</p>
                    </li>
                    <li class="style-list">Trio de zacusc?? <p class="price">15 lei</p>
                    </li>
                    <li class="style-list">Fritto misto <p class="price">35 lei</p>
                    </li>
                </ul>

                <h3 class="h3">Supe/Creme</h3>
                <ul class="list-food">
                    <li class="style-list">Ciorb?? ????r??neasc?? de v??cu???? 20lei <p class="price">35 lei</p>
                    </li>
                    <li class="style-list">Ciorb?? de burt?? <p class="price">20 lei</p>
                    </li>
                    <li class="style-list">Sup?? de cartofi cu costi??e ??i afum??turi <p class="price">22 lei</p>
                    </li>
                    <li class="style-list">Sup?? crem?? de dovleac <p class="price">22 lei</p>
                    </li>
                    <li class="style-list">Sup?? crem?? de broccoli <p class="price">22 lei</p>
                    </li>
                </ul>

                <h3 class="h3">Preparate din Porc</h3>
                <ul class="list-food">
                    <li class="style-list">Costi??e Vieneze <p class="price">50 lei</p>
                    </li>
                    <li class="style-list">Cotlet de Mangali???? <p class="price">65 lei</p>
                    </li>
                    <li class="style-list"> Ciolan de porc ??n stil Bavarez 70 lei <p class="price">70 lei</p>
                    </li>
                    <li class="style-list"> Ceaf?? ??ig??neasc?? <p class="price">40 lei</p>
                    </li>
                </ul>

                <h3 class="h3">Preparate din Miel </h3>
                <ul class="list-food">
                    <li class="style-list">Cotlet de Miel cu piure de mazare 90 lei <p class="price">90 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din </h3>
                <ul class="list-food">
                    <li class="style-list">Pulp?? de ra???? cu varz?? ro??ie c??lit?? <p class="price">65 lei</p>
                    </li>
                    <li class="style-list">Piept de ra???? cu piure de p??st??rnac <p class="price">70 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din vit??

                </h3>
                <ul class="list-food">
                    <li class="style-list">Muschi de vit?? cu ficat de g??sc?? ??i hribi <p class="price"> 130 lei</p>
                    </li>
                    <li id="decor-list">Rib eye steak <p class="price">40lei/100gr</p>
                    </li>
                    <li id="decor-list">??ni??tel Vienez <p class="price">70 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din pe??te</h3>
                <ul class="list-food">
                    <li class="style-list">File de somon ??n crust?? cu piure de p??st??rnac <p class="price">80 lei </p>
                    </li>
                    <li class="style-list">Biban la cuptor cu legume nobile <p class="price">70 lei </p>
                    </li>
                    <li class="style-list">File de ??al??u cu legume la gr??tar <p class="price">65 lei</p>
                    </li>
                </ul>
                <h3 class="h3">Preparate din Pas??re</h3>
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
                    <li class="style-list">Salat?? caesar <p class="price">40 lei </p>
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