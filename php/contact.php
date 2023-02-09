<head>
    <link rel="stylesheet" href="/css/contact.css">
</head>
<?php 
     @include('header-v.php') ?>
<div class="container">
            <div class="ConatcT">
                <div class="content">
                    <h1 class="contact-align">Contact</h1>
                    <p class="p-style">Ne găsești la aceași adresă, în același loc sau la nr de telefon 0743 433 223</p>
                    <p class="p-style">Noi vă înțelegem nevoile și vă vom oferim mâncare pentru a satisface poftele dvs. atât
                        aspectul câtși gustul.</p>
                    <p class="p-style"><strong>Rezervă</strong> o masă și dacă ai cerințe speciale lasă-ne și un mesaj:</p>
                    <!-- <form action="mailto:someone@example.com?subject=Rezervare masa" method="post" enctype="text/plain"> -->
                    <form action="/send-mail.php" method="post"">
                        <p><input class="nume-rezervare" type="text" placeholder="Nume rezervare"
                                required name="name">
                        </p>
                        <p><input class="nume-rezervare" type="number" placeholder="Câte persoane" required
                                name="people"></p>
                        <p>
                            <input  class="nume-rezervare" type="datetime-local"
                                placeholder="Date and time" required name="date" value="2020-11-16T20:00">
                        </p>
                        <p> <input type="tel" class="nume-rezervare" name="phone" placeholder="Telefon"></p>
                        <p>
                            <textarea 
                                class="nume-rezervare" 
                                name="message"
                                required>Mesaj sau cerinte speciale</textarea>
                        </p>
                        <p><button class="Send-msg" type="submit" >Rezervă o masă!</button></p>
                    </form>
                </div>
            </div>
            
        </div>
        <?php
        @include('footer.php')
    ?>