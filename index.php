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
    <link rel="stylesheet" href="css/gabsa.css">
    <title>Gabs-i daum</title>
</head>
<body>
    <script src="js/gabs.js">

    </script>

    <header>
        <img src="" alt="Gabs-i daum">
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
        <a href="" >Koszyk</a>

    </header>
    <nav>
        <li id="nav1">perfumy</li>
        <li id="nav2">perfumy</li>
        <li id="nav3">perfumy</li>
        <li id="nav4">perfumy</li>
        <li id="nav5">perfumy</li>
        <li id="nav6">perfumy</li>
        <li id="nav7">perfumy</li>
        <li id="nav8">perfumy</li>
    </nav>
    <main>
        <section class="slider">
            slider
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
        </section>

        <aside>
            <img src="" alt="">
            <button>Zobacz</button>
        </aside>

        <aside>
            <img src="" alt="">
            <button>Sprawdź co mamy</button>
        </aside>
        
        <section>
            <img src="" alt="">
        </section>

        <section>
            <img src="" alt="">
        </section>

        <section>
            <img src="" alt="">
        </section>

        <aside>
            reklama
        </aside>
    </main>
    <footer>
        <li>Designer: Marta Wiora</li>
        <li>Właściciel: XXX XXXXX</li>
        <li>telefon: 255 836 84X</li>
    </footer>







</body>
</html>