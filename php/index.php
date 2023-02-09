<html>
<?php 
    @include('head.php')
?>
<body>
    <?php 
     @include('header-v.php') ?>
    <main>
        <div class="container" >
            <div class="background-img">
                <h1 class="margin-0">Demian Restaurant</h1>

                <button class="btn-meniu"  a href="#meniu"></a>Meniu</button>

                <div class="open">
                    <span class="day">Luni - Duminica 12.00 - 23.00</span>
                </div>

            </div>

        </div>
        <h2 id="about">Despre Noi</h2>
        <div class="container" >
            <div class="flex">

                <div class="despre-noi padding-img">


                    <p>Echipa noastră, este o echipă renumită și formată prin mulți ani de experiență</p>
                    <img class="echipa"
                        src="/img/kitchen.png"
                        alt="">
                </div>
                <div ">
                    <img class="echipa"
                        src="/img/interior4.png"                       
                         alt="">
                    <p class="echipa">Restaurantul nostru dispune de o capacitate de 85 de locuri, deschis zilnic intre
                        orele 07:30 si
                        22:00.
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="container" >
            <div class="Meniuri">
                <div class="boh">
                    <div class="mancare relative">
                        <img class="img-meniuri" style="padding-right: 5px;"
                            src="/img/men-mancare.png"
                            alt="">

                        <button class="btn-center" href="/Meniu.html">Meniu mancare</button>

                    </div>
                    <div class="bauturi relative">
                        <img class="img-meniuri" style="padding-left: 5px;"
                            src="https://images.unsplash.com/photo-1568213816046-0ee1c42bd559?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80"
                            alt="">
                        <button class="btn-center" href="/Meniu.html">Meniu bauturi</button>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <?php 
       @include('contact.php')
       ?>
</main>

</body>

</html>