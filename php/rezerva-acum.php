<head>
    <link rel="stylesheet" href="/css/rezerva-acum.css">
</head>

<div class="container">
            <div class="ConatcT">
                <div class="content">
                    <div class="first-part">
                    <h1 class="contact-align">Rezervă Acum!</h1>
                    <br>
                    <p class="p-style">Ne găsești la aceași adresă, în același loc sau la nr de telefon <b>0743 433 223</b></p>
                    <br>
                    <p class="p-style">Noi vă înțelegem nevoile și vă vom oferim mâncare pentru a satisface poftele dvs. atât
                        aspectul cât și gustul.</p>
                        <br>
                    <p class="p-style"><strong>Rezervă</strong> o masă și dacă ai cerințe speciale lasă-ne și un mesaj:</p>
                    <br>
                    </div>
                     <div class="second-part">   
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
                                required>Mesaj sau cerințe speciale</textarea>
                        </p>
                        <br>
                        <p><button class="Send-msg" type="submit" >Rezervă acum o masă!</button></p>
                    </form>
                    </div>
                    </div> 
                </div>
            </div>
            
        </div>