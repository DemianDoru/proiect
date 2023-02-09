<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meniu Vinuri</title>
    <link rel="stylesheet" href="/css/meniu-vinuri.Css">
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
        <h1 style="text-align: center;">Vinuri</h1>
        <div class="container">

            <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide"><img
                            src="https://s3-alpha-sig.figma.com/img/e2c6/a699/0815043457d06b406e9bf5dab79646e8?Expires=1673827200&Signature=aSKTZHfYEfeyFVmdofxxMcL0v5CzJH1c2hhAtYzaGMqHCGgJ-4zVHFYB9d7mCmiuhAC7TQDOoe3WYHk5x0mqDRRmTxkXQ5P5PnHhkWB~0gizdwBRKql6016nD7PEkvIi~pYkOibYQvK4cSIFfANez2FH97AsoM044trustkJUCVZ~3Uq22rFwrDp-QRpL0c2McNKgiaIWUmp4XwZIIb~KAR6h0nWMy9OHpb~lW~Q-hrojm7l8dOfdPsmar6idfIeECFYgENeTo4q7nAD9zLvFihj-sUWyQDT4QbbBH6jVcGZPb5Ku3avpVctohxDic9kTi-3Z~eJZm7~uuYG2Rpp1w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="https://s3-alpha-sig.figma.com/img/a5f3/6b28/bbff8baebbcacc5b15bee7e168fc5127?Expires=1673827200&Signature=pRiJtEu7JJ535nMldf2ImP1aRYJD0xu5AR9-LS6p~7tY4hp~sBiWGoV0nzmO-Yr-0aetNSNHkjmj4mwXPC6YEH4utuXUJxcYf0r08cSm5Ysbb~ytriYSSJyo5ECvB~xCj6gkef52edKNe12k6utY8zogmzuvqDHurkLO06YAtM74KYc7Ip9DxzgBPGF10SG0YskQRUhsds3YeQQYdb5~igj08W9IIgA5e-PInWO2XILL1MleOKBXx7c~s8WqJSOBW7ZChus2kPQtQcPmjHq1s8G6LZCP6uavMVMkZ~877a8-Rq4zYjM00MxZ8FrVR1esArs~OD0EUpMhzgGxtdEsnw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="https://s3-alpha-sig.figma.com/img/52b6/6734/9b8a1238a40d2e132a3531a8b1f7ccd6?Expires=1673827200&Signature=TNmmjuwHFsBnLdWx1biJqKIN5nTl9xQ8JfhaaV2ByWxeRjwONKupI7~4LBb-xCCiKghjMVJAVivlMaIKzLey-awVGxBL5GriLlPr5ZkTlTgl1Ub2BHqUjpVLenhuGYdrplsKRX7LM5P5kWPYKBAVJByUWSHX~ELhVlVbmmU~4y-jLUw0fJo17uzmg8IUEh0k9aPizkPCHuyBQf~-I-wg40OZQLXa0jJft6k04gmHhqwgAcijVkp9qoAmNbYvJ1ZGgBnVLn~zR3LmZUlYcQMoKQLmWCCmGq8bZNpHC01PxYmWfZHIPkO7FMtL3gsz1tdoco5HJjpJWNCrVigMjgAvSQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="https://images.unsplash.com/photo-1547595628-c61a29f496f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt=""></div>
                </div>

                <div class="swiper-pagination"></div>


                <div class="swiper-button-prev" style="color: red;"></div>
                <div class="swiper-button-next" style="color: red;"></div>

            </div>
        </div>

        <div class="ContaineR">
            <div class="h2" style="text-align: center;">Vinurile Noastre</div>
            <div class="Sampanii">
                <h2>Șampanii

                </h2>

                <ul>
                    <li>Moet Nectar Imperial <p class="price-wine">450 lei </p>
                    </li>
                    <li>Veuve Cliquet <p class="price-wine"> 530 lei</p>
                    </li>
                    <li>Dom Perignon <p class="price-wine">1600 lei </p>
                    </li>
                </ul>
            </div>
            <div class="vinuri-spumante">
                <h2>Vinuri Spumante

                </h2>
                <ul>
                    <li>Prosecco Merotto ‘Caste’ <p class="price-wine"> 110 lei</p>
                    </li>
                    <li>Prosecco Magnum-Merotto ‘Caste’ <p class="price-wine">220 lei </p>
                    </li>
                    <li>Asti Martini <p class="price-wine">130 lei </p>
                    </li>
                    <li>Ferrari Maximum <p class="price-wine">280 lei </p>
                    </li>
                </ul>
            </div>
            <div class="vinuriAlbe">
                <h2>Vinuri Albe</h2>
                <h3>Chardonnay</h3>
                <ul>
                    <li>Petro Vaselo - Chardonnay <p class="price-wine">90 lei </p>
                    </li>
                    <li>Liliac - Chardonnay <p class="price-wine"> 95 lei </p>
                    </li>
                    <li>Recaș - Sole Chardonnay Barrique <p class="price-wine">120 lei </p>
                    </li>
                </ul>

                <h3>Sauvignon Blanc

                </h3>
                <ul>
                    <li>Oprișor - Caloian - Sauvignon Blanc <p class="price-wine"> 80 lei</p>
                    </li>
                    <li>Domeniul Vlădoi - Anca Maria- Sauvignon Blanc <p class="price-wine"> 85 lei</p>
                    </li>
                    <li>Corcova - Sauvignon Blanc <p class="price-wine">75 lei </p>
                    </li>
                </ul>
                <h3> Tămâioasă Românească

                </h3>
                <ul>
                    <li>Budureasca Fume <p class="price-wine"> 85 lei</p>
                    </li>
                    <li>Aurelia Vișinescu - Artisan <p class="price-wine">95 lei </p>
                    </li>
                </ul>
                <h3>Pinot Grigio

                </h3>
                <ul>
                    <li>Purcari - Pinot Grigio <p class="price-wine">85 lei </p>
                    </li>
                    <li>Recaș - Regno - Pinot Grigio <p class="price-wine">75 lei </p>
                    </li>
                </ul>
                <h3>Riesling

                </h3>
                <ul>
                    <li>Recaș - Castel Huniade - Riesling <p class="price-wine"> 65 lei</p>
                    </li>
                </ul>
                <h3> Fetească Albă

                </h3>
                <ul>
                    <li>Valahorum - Fetească Albă <p class="price-wine">105 lei </p>
                    </li>
                </ul>
                <h3> Fetească Regală

                </h3>
                <ul>
                    <li>Recaș - Sole - Fetească Regală Barrique <p class="price-wine"> 125 lei</p>
                    </li>
                </ul>
                <h3> Grecco di Tufo

                </h3>
                <ul>
                    <li>Ducato Sannita - Greco di Tufo <p class="price-wine"> 85 lei</p>
                    </li>
                    <li>Falanghina del Sannio <p class="price-wine"> 90 lei</p>
                    </li>
                </ul>
            </div>
            <div class="vinuriRosii">
                <h2>Vinuri Roșii</h2>
                <h3> Cabernet Sauvignon

                </h3>
                <ul>
                    <li>Petro Vaselo - Cabernet Sauvignon <p class="price-wine"> 85 lei</p>
                    </li>
                    <li>Crama Oprișor - La Cetate - Cabernet Sauvignon <p class="price-wine">105 lei </p>
                    </li>
                    <li>Petro Vaselo Negru <p class="price-wine"> 75 lei</p>
                    </li>
                    <li>Garda Cabernet Sauvignon <p class="price-wine">106 lei </p>
                    </li>
                </ul>
                <h3> Fetească Neagră

                </h3>
                <ul>
                    <li>Crama Oprișor - Caloian - Fetească Neagră <p class="price-wine"> 70 lei</p>
                    </li>
                    <li>Crama Serve - Terra Roamana- Fetească Neagră <p class="price-wine">90 lei </p>
                    </li>
                    <li>Recaș - Selene - Fetească Neagră <p class="price-wine"> 135 lei </p>
                    </li>
                    <li>Rasova - La Plage <p class="price-wine">70 lei </p>
                    </li>
                </ul>
                <h3>Saperavi

                </h3>
                <ul>
                    <li>Gitana - Saperavi <p class="price-wine"> 135 lei </p>
                    </li>
                </ul>
                <h3>Susumaniello

                </h3>
                <ul>
                    <li>Risveglio - Susumaniello <p class="price-wine">140 lei </p>
                    </li>
                </ul>
                <h3>Primitivo

                </h3>
                <ul>
                    <li>Pirovano - Primitivo di Manduria <p class="price-wine"> 110 lei</p>
                    </li>
                </ul>
                <h3> Negroamaro

                </h3>
                <ul>
                    <li>Pirovano - Salento Rosso Passito <p class="price-wine">92 lei </p>
                    </li>
                </ul>
                <h3> Barbera

                </h3>
                <ul>
                    <li>Renato Ratti Barbera D’Alba Battaglione <p class="price-wine"> 170 lei</p>
                    </li>
                </ul>
                <h3>Brunello

                </h3>
                <ul>
                    <li>Brunello di Montalcino - Col d’Orcia <p class="price-wine"> 320 lei </p>
                    </li>
                </ul>
                <h3> Custoza

                </h3>
                <ul>
                    <li>Amarone della Valpolicella - Custoza <p class="price-wine">520 lei </p>
                    </li>
                </ul>
            </div>
            <div class="vinuriRoze">
                <h2>Vinuri Roze</h2>

                <ul>
                    <li>Dealu Mare - Metamorfosis Roze <p class="price-wine">60 lei </p>
                    </li>
                    <li>Bardolino Ghioretto <p class="price-wine">74 lei </p>
                    </li>
                    <li>Recaș - Regno - Roze <p class="price-wine">75 lei </p>
                    </li>
                    <li>Corcova - Roze <p class="price-wine">80 lei </p>
                    </li>
                    <li>Oprișor - Jiana - Roze <p class="price-wine"> 105 lei</p>
                    </li>
                    <li>Recaș - Sole - Roze <p class="price-wine">125 lei </p>
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