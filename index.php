<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coating voor Kunststof, Trespa, Metaal | NitoCoat.works</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="header">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Zoek hier naar uw product....">
            <button type="submit" name="submit" value="Submit">ZOEKEN</button>
        </form>
    </div>

    <div class="topnav">
        <a class="active" href="#home">NitoCoat.works</a>
        <a href="#protectors">PROTECTORS</a>
        <a href="#cleaners">CLEANERS</a>
        <a href="#removers">REMOVERS</a>
        <a href="#specialties">SPECIALTIES</a>
        <a href="#toepassingen">TOEPASSINGEN</a>
        <a href="#faq">FAQ</a>
    </div>

    <div class="section">
        <h2>PRODUCTEN</h2>
            <div class="product-container">
                <?php
                $sql = "SELECT * FROM article";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='product-box'>
                                    <h3>" . $row['a_title'] . "</h3>
                                    <p>" . $row['a_text'] . "</p>
                                    <p>" . $row['a_price'] . "</p>
                            </div>";
                    }
                }
                ?>
            </div>
    </div>

    <br>

    <div class="section">
        <h1>DÉ INNOVATIEVE RENOVATIE COATING</h1>
        <div class="listhp">
            <iframe width="406" height="315" src="https://www.youtube.com/embed/bG4AWoSObXQ" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
    
            <ul>
                <li>Unieke 1 component “easy to clean” glas coating</li>
                <li>Conserverend en zeer hoge UV- en chemische bestendigheid</li>
                <li>Haalt verweerde en fletse coating en verfsystemen op</li>
                <li>Uitmuntende anti-graffiti eigenschappen</li>
                <li>1 laag transparant</li>
                <li>Lange levensduur 5-10 jaar</li>
                <li>Kosten per m2 circa €10,00</li>
            </ul>
        </div>

    </div>


    <br>

    <div class="section">
        <a href="#contact"><img src="img/gratisDemonstratie.jpg" alt="Gratis Demonstratie"></a>
        <a href="#startpakket"><img src="img/startpakket.jpg" alt="Startpakket bestellen"></a>
        <a href="#instructie"><img src="img/instructieVideo.jpg" alt="Instructievideo"></a>
        <a href="#specialist"><img src="img/specialist.jpg" alt="Word een specialist"></a>
    </div>

    <br>

    <div class="section">
        <h1>NITOCOAT ZORGT VOOR BLIJVENDE UITSTRALING</h1>
        <p>Besparen op onderhoud aan woningen en bedrijfspanden?
            Een gevel vernieuwen of beschermen tegen bijvoorbeeld graffiti?
            U bent bij ons aan het juiste adres!

            NitoCoat.works is er speciaal voor bouwbedrijven, onderhoudsbedrijven, schoonmaakbedrijven,
            woningcoöperaties, schilders en de professionele klussers.

            Wij zijn gespecialiseerd in beschermende renovatiecoatings, industriële reinigingsmiddelen en aanverwante
            artikelen.
            Ons assortiment bestaat uit hoogwaardige en innovatieve producten ter bescherming van materialen als
            kunststof, trespa, metaal en beton. Onze producten zijn bedoeld voor professioneel gebruik en zeer
            eenvoudig toe te passen.
        </p>
    </div>

    <br>

    <div class="section">
        <h1>Ons assortiment bestaat uit de volgende productcategorieën</h1>
        <a href="#protectors"><img src="img/protectors.png" alt="PROTECTORS"></a>
        <a href="#cleaners"><img src="img/cleaners.png" alt="CLEANERS"></a>
        <a href="#removers"><img src="img/removers.png" alt="REMOVERS"></a>
        <a href="#specialisties"><img src="img/specialties.png" alt="SPECIALTIES"></a>

    </div>

    <br>

    <footer>
        <div id="myfootertext">
            <div>
                <h3>KLANTENSERVICE</h3>
                <ul class="none">
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="#overons">OVER ONS</a></li>
                    <li><a href="#certificaat">CERTIFICAAT</a></li>
                    <li><a href="#disclaimer">DISCLAIMER</a></li>
                </ul>
            </div>
            <div>
                <h3>BESTELLEN</h3>
                <ul class="none">
                    <li><a href="#bestelinformatie">BESTELINFORMATIE</a></li>
                    <li><a href="#voorwaarden">ALGEMENE VERKOOP<br>EN LEVERINGS VOORWAARDEN</a></li>
                </ul>
            </div>
            <div>
                <h3>ERVARINGEN</h3>
                <a href="#referenties"><img src="img/referenties.png" alt="REFERENTIES"></a>
                <p>"Voor de schilder is NitoCoat<br>voordelig omdat het veel tijdwinst oplevert.<br>De inspanning en de
                    kosten per onderdeel<br>vallen verbazend laag uit."</p>
            </div>
            <div>
                <h3>CONTACT</h3>
                <p>Heeft u vragen?</p>
                <ul class="none">
                    <li>mob: 06-41327350</li>
                    <li><a href="https://api.whatsapp.com/send?phone=31641327350">Ook via Whatsapp</a></li>
                    <li><a href="mailto:info@nitocoat.works">e-mail: info@nitocoat.works</a></li>
                </ul>

            </div>
        </div>
    </footer>


</body>

</html>