<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenimente</title>
    <link rel="stylesheet" href="/css/evenimente.css">
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
        <h1>Evenimente</h1>
        <div class="container">
            <div class="swiper padding">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img
                            src="/img/interior1.png"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="/img/interior2.png"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="/img/interior3.png"
                            alt=""></div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev" style="color: red;"></div>
                    <div class="swiper-button-next" style="color: red;"></div>
                </div>
                <div class="padding">
                    <div> <br>
                        <p>Evenimentele speciale din viața ta merită sărbătorite într-un restaurant la fel
                            de special.
                            <br>
                            <br>
                            Cu o locație elegantă și primitoare, Restaurantul Demian’s este alături de tine atunci când vrei
                            să
                            organizezi: botezuri, mese festive sau evenimente corporate care vor impresiona oaspeții într-un
                            mod
                            inedit.
                            <br>
                            <br>
                            De la bucate delicioase care încântă papilele gustative ale oricărui gurmand,
                            până la decorul sălii și profesionalismul ospătarilor, restaurantul nostru va deveni locul în
                            care
                            îți
                            vei aminti de cele mai frumoase evenimente.
                         </p>
                    </div>
                </div>
             </div>
        </div>
        <div class="container">
            <div>

                <div>
                    <div class="swiper padding">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img
                                    src="/img/food1.png"
                                    alt=""></div>
                            <div class="swiper-slide"><img
                                    src="/img/food2.png"
                                    alt=""></div>
                            <div class="swiper-slide"><img
                                    src="/img/food3.png"
                                    alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" style="color: red;"></div>
                        <div class="swiper-button-next" style="color: red;"></div>
                    </div>
                </div>
            </div>
            <div class="padding">
                <p>
                    De ce să organizezi un Eveniment la Demian's Restaurant :
                    <br>
                    <br>
                    Sărbătorește oriunde vrei <br>
                    În grupuri mici în interiorul restaurantului, într-o sală privată de până la 80 de persoane sau în
                    grădina naturală de pe acoperiș.
                    <br>
                    <br>
                    Potrivit pentru toată lumea <br>
                    Există specialități din pește, feluri principale pe bază de carne și primele feluri din bucătăria
                    romană.
                    <br>
                    <br>
                    Parcare privată <br>
                    Parcarea privată este disponibilă pentru toți clienții restaurantului, în funcție de
                    disponibilitate.
                </p>
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