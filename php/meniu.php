<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meniu</title>
    <link rel="stylesheet" href="/css/meniu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
       
    </style>
</head>

<body>
<?php 
        @include('header-v.php')
    ?>
    <main>
        <div class="container">
            <div class="background-meniu">
            <h1 style="text-align: center;"> Meniu </h1>    
                    <div class="img-top">
                    <img style="width: 100%;"
                        src="/img/img-food2.png"
                        alt="">
                        <br>
                    <h2 style="text-align: center;">Restaurantul din inima Oradiei</h2>
                    <p>Misiunea noastră este să transformăm orice întâlnire, fie că este vorba de o cină în doi, sau o seară de grup, într-o experiență memorabilă. Pregătim totul în cel mai mic detaliu, astfel încât tu să te simți special de fiecare dată când treci pe la noi. Te așteptăm cu un meniu variat cu preparate din caren, paste, vinuri alese și deserturi delicioase.</p>
                    <br>
                            <div>
                                <div class="direction-img">
                                    <img class="img-style" style="padding-right: 5px;" 
                                    src="/img/men-mancare.png"
                                    alt="">
                                    <img class="img-style" style="padding-left: 5px;"
                                     src="https://images.unsplash.com/photo-1568213816046-0ee1c42bd559?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80"
                                    alt="">
                                </div>
                            </div>
            </div> 
            <div>
                <br>
                <h2 class="design-h" style="text-align: center">Meniuri pentru evenimente speciale</h2>
                <br>
                <p>La Restaurantul Universitarului poți organiza și evenimente speciale pentru care poți alege meniuri potrivite tematicii evenimentului și numărului de participanți. Decorul unic, mâncarea savuroasă, atmosfera rafinată și serviciile excelente sunt condimentele unei petreceri pe care oaspeții tăi nu o vor uita prea curând!</p>
                <div>

                    <div class="meniuri-evenimente">
                        <div class="Zi-de-nastere padding">
                            <h3 class="design-h" style="text-align: center">Zi de nastere</h3>
                            <img class="img-style"
                                src="/img/Happy-bth.png"
                                alt="">
                        </div>
                        <div class="Revelion padding">
                            <h3 class="design-h" style="text-align: center">Revelion</h3>
                            <img class="img-style"
                                src="https://plus.unsplash.com/premium_photo-1663840297123-29164230cc9d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </div>
                        <div class="Botez padding">
                            <h3 class="design-h" style="text-align: center">Botez</h3>
                            <img class="img-style"
                                src="/img/botez.png"
                                alt="">
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php
        @include('footer.php')
    ?>

</body>

</html>