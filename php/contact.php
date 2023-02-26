 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="/css/contact-bun.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
 <header>
         <div class="logo"> 
            <a href="/php/">
                <img class="logo"       
                src="/img/logo-nav.png">
            </a>
        </div> 
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div> 
        <nav class="nav-bar">
               <ul>
                    <li><a href="/php/meniu#about" class="active" ><i class="fa fa-cutlery"></i>Meniu</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="/php/meniu#about">Meniu</a>
                                <div class="sub-menu">
                                <ul>
                                    <li><a href="/php/meniu-mancare.php">Meniu mâncare</a></li>
                                    <li><a href="/php/meniu-vinuri.php">Meniu vinuri</a></li>
                                </ul>
                                </div>
                            </li>
                               
                            </ul>
                        </div>
                    </li>
                    <li><a href="/php/despre"><i class="fa fa-user"></i>Despre Noi</a></li>
                    <li><a href="/php/evenimente"><i class="fa fa-clone"></i>Evenimente</a>
                        <div class="dropdown-menu-2">
                            <ul>
                                <li><a href="/php/evenimente"><i class="fa fa-clone"></i>Evenimente</a> 
                                <div class="sub-menu2">
                                <ul>
                                <li><a href="/php/ziledenastere.php">Zi de naștere</a></li>
                                <li><a href="/php/botez-bun.php">Botez</a></li>
                                <li><a href="/php/revelion.php">Revelion</a></li>
                                </ul>
                                </div>
                            </li>
                               
                            </ul>
                        </div>
                    </li>
                    <li><a href="/php/contact"><i class="fa fa-phone"></i>Contact</a></li>
                </ul>
        </nav>
</header>

    <section class="contact">
        <div class="content">
            <h2>Contactează-ne</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" ></i></div>
                    <div class="text">
                        <h3>Adresă</h3>
                        <p>Oradea, Piata Unirii nr 31</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="text">
                        <h3>Telefon</h3>
                        <p>0743 433 223</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>contact@universitarul.ro</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
            <!-- <form action="https://formsubmit.co/your@email.com" method="POST">
     <input type="text" name="name" required>
     <input type="email" name="email" required>
     <button type="submit">Send</button>
</form> -->
                <form action="https://formsubmit.co/dorutz_ionutz@yahoo.com" method="POST">
                    <h2>Trimite mesaj</h2>
                    <div class="inputBox">
                        <input type="text" name="full-name" required="required">
                        <span>Nume complet</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="message-text" required="required">
                        <span>Scrie mesajul tau...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
 </body>
 <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function(){
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
    }
</script>
 </html>