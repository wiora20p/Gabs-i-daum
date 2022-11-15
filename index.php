<?php
ob_start();
session_start();
//include 'czyZalogowany.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/strGlowna.css">
    <title>Gabs-i daum</title>
    
</style>
</head>
<body>

    <header>
        <section><a href="index.php"><div style="color: #6AC7F7"> Gabs-i </div><div style="color: #6AF7B5"> daum</style></a></section>
        <form class="szukaj" action="wyszukiwarka.php" method="POST" >
            <input name="wyszukiwarka" type="text" class="wyszukiwarka" placeholder="Co szukasz?">
            <input type="submit" value="szukaj">
        </form>
        <?php 
            if(!isset($_SESSION ["login"]))
                echo '<a href="logowanie.php">logowanie</a>';
            else{
                echo $_SESSION ["login"];
                echo '<a href="wyloguj.php">wyloguj się</a>';
            }
        ?>
        <a href="koszyk.php" >Koszyk</a>

    </header>
    <nav>
        <li id="nav1"><a href="wyszukiwarka.php">perfumy</a></li>
        <li id="nav2">perfumy</li>
        <li id="nav3">perfumy</li>
        <li id="nav4">perfumy</li>
        <li id="nav5">perfumy</li>
        <li id="nav6">perfumy</li>
        <li id="nav7">perfumy</li>
        <li id="nav8">perfumy</li>
    </nav>
    <main>
        <section class="bigSlider">
            <div class="mySlides">
            <img src="flughafen-bremen-vorfeld.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <img src="3P-handlowiec.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <img src="WhatsApp.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </section>

        <section class="drugi dwa">
            <aside>
                <img src="" alt="">
                <button>Przejdź dalej</button>
            </aside>

            <aside>
                <img src="" alt="">
                <button>Odkryj</button>
            </aside>
        </section>
        
        <section class="hitySezonu">
            <h3>Hity sezonu</h3>
            <!-- tutaj z JS robimy slider, ale inny (można coś wypróbować z automatycznym przewijaniem co jakiś czas) -->
            <section class="smallSlider">
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
                <div><img src="" alt=""></div>
            </section>
        </section>

        <section class="czwarty dwa">
            <aside>
                <img src="" alt="">
                <button>Zobacz</button>
            </aside>

            <aside>
                <img src="" alt="">
                <button>Sprawdź co mamy</button>
            </aside>
        </section>
        
        <section class="piaty trzy">
            <div><img src="" alt=""></div>
            <div><img src="" alt=""></div>
            <div><img src="" alt=""></div>
        </section>

        <aside class="szosty">
            reklama
        </aside>
    </main>
    <footer>
        <li>Designer: Marta Wiora</li>
        <li>Właściciel: XXX XXXXX</li>
        <li>telefon: 255 836 84X</li>
    </footer>





    <!-- <script src="js/gabs.js"></script> -->
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slides[slideIndex-1].style.display = "block";  
        }

    </script>

</body>
</html>