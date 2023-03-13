<head>
<link rel="stylesheet" href="/css/header-v.css">
</head>
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
                                <li><a href="/php/meniu#about">Meniu<i class="fa fa-chevron-right"></a></i>
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
<script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function(){
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
    }
</script>