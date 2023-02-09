<html>
<?php 
    @include('head.php')
?>
<body>
    <?php 
        @include('header-v.php')
    ?>
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
                        src="https://s3-alpha-sig.figma.com/img/d820/ddb1/a34470b7a3510bd915d327777fb93ce2?Expires=1674432000&Signature=LTPfUFbvRWhe5BUGP34y6BIqADransfN9LpaOj5NdwTm9O0HCdSBYmYsO9gDpj-gfZkSB54KCc2nNHz3V2nc0pNXVoAGqXtAWLg4NHc1vBBcm8uIrrVxpV8QGRz3RvaXOgWvJ3sb3sT3tDTIFPitu-PM2PUioRON3F0WmhHNztr2tA64f4LjGsXb2~pjnkg24Eya1Zjw-~8fTH6oh122BlL9TuXSIVYfCSskJ-l0-ZFNYuzBFIrW6f1~GzUcDrJaUqHfagSVLcadGmrQsZWgbCJ~IBCe-UjQLGj8Ds77sGUM4tcpY8OvOSN2BDSUcUe94-K5eK8kb52Tolt8g3cChQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                        alt="">
                </div>
                <div ">
                    <img class="echipa"
                        src="https://s3-alpha-sig.figma.com/img/ead6/e333/6a19af9f3dab1ba0b12696da6f2dd666?Expires=1674432000&Signature=Tl9KHim9imir7do8aDP1TIFm83SmnqdNjYXDBdmWfQmWu6YLl6lBZI3ZV91mkTdjymRl6VOVoyTO5dgOhxiJOl6UugjE6y~sRjvRLFIAThPxhmM~RmZn~LlY4K~NT~GLdKFa52wMsejUxI8BMzdfBqPEK2OBhLUCL7-maUjUkfMen2mBBxqY3CdF1Neau6sMXafAluu0U2t8CH-uepxA6D40B9DU2P0qqTet2X3dWXGq17Bk2I8AjFiWx1TxAAMf3lHt2638xRLZi6BBiQnickXlwnxhcJfcC1gYeNQvVBcSfOuWQUAtAHZjk2~Klxw95LiEtmcng6S~HM09ceHYbw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"                       
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
                            src="https://s3-alpha-sig.figma.com/img/bc7a/08da/e93839b73889e7518241efcf5bf87374?Expires=1674432000&Signature=DOUWMDA3TXJKEL7GWx3yHILNYB2uCpkNcZ5drB16OzHuXVPia5rxjq2AEi7ErJI-R4OK2b1RlnUKyveQdpMS-OvpMZgmU1O~bSxdbGrPvXlQIJDTxpA9VGkpAhl9FOyJK5HxsB7lS-iE5zPu31BNr1YUW69FFTibYkne6KvnAsOYtxgnnyly6CNxXSUCoHTTI6m870bw0HuYWihq5NhJlCJ9fSXc0zcHOQM8yVcM4Faqt4HKAyiJFBt7qDR6N1klA-Kjj-SlauaDrkwQXG0zPObpn5NBxiMOYmWzPO48jvD0qIeQ7zuE1oM19sBbKne-88Y-rdP6Ue8~DR-2Y1fXwA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
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
     
</main>
<?php 
       @include('contact.php')
       ?>

    <?php
        @include('footer.php')
    ?>
</body>

</html>