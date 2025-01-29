 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<META content=cs http-equiv=Content-Language>
<META content="text/html; charset=windows-1250" http-equiv=Content-Type>
<meta name="robots" content="all,follow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="description" content="Staré pohlednice Podivína">
<META name="keywords" content="pohlednice, sbírka, podivín">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" type="text/css" href="cssPohlednice.css">
<title>Podivín na pohlednicích</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<meta http-equiv="Cache-control" content="no-cache">
    <style>
        body {
            touch-action: pan-y; /* Allow vertical scrolling */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add keyboard event listeners
            document.addEventListener('keydown', function(event) {
                if (event.key === 'ArrowRight') {
                    window.location.href = '000-strucna-historie-pohlednic-podivina.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '000-strucna-historie-pohlednic-podivina.php') {
                    links[i].setAttribute('title', 'Šipka vpravo');
                }
            }

            // Add swipe event listeners for mobile devices
            var touchstartX = 0;
            var touchendX = 0;
            var touchstartY = 0;
            var touchendY = 0;

            function handleGesture() {
                var deltaX = touchendX - touchstartX;
                var deltaY = touchendY - touchstartY;
                if (Math.abs(deltaX) > Math.abs(deltaY)) {
                    if (deltaX < 0) {
                        window.location.href = '000-strucna-historie-pohlednic-podivina.php'; // Swipe left to navigate to the next page
                    }
                }
            }

            document.addEventListener('touchstart', function(event) {
                touchstartX = event.changedTouches[0].screenX;
                touchstartY = event.changedTouches[0].screenY;
            });

            document.addEventListener('touchend', function(event) {
                touchendX = event.changedTouches[0].screenX;
                touchendY = event.changedTouches[0].screenY;
                handleGesture();
            });
        });
    </script>
</head>
<body class="hlavni">
<div id="hlavaindex" class="hlavaindex">
<div class="pohledHlava">
<A href='index.php'><img  src="pohledHlava.jpg"  width="1000" alt="pohlednice"  vspace="0" hspace="0" ></A>

</div><!--konec hlavaIndexV-->
<hr>
<div id="obsah"  class="obsah">
<? include "phpLevyPax.php" ?>
<? include "phpLevyPa.php" ?>
<div id="text1"  class="text1">
<h1>Podivín na pohlednicích</h1>

     Město Podivín je jedním z nejstarších míst na Moravě, které je uváděno v Kosmově kronice k r.1067 jako hrad Podiuin, ležící uprostřed řeky Svratky (tj. nyní Dyje). Název města Kostel - Kostl, je jméno města, které se uvádí ve starých dokumentech od r.1248.<br>
     Až do počátku 15. století bylo město v rukou zeměpanských, poté bylo dáváno do zástavy. V roce 1559 je získal Jan ze Žerotína. Od této doby sdílí Podivín osudy s panstvím břeclavským, které se roku 1638 dostalo spět do majetku Lichtenštejnů. V roce 1850 byl Podivín začleněn pod politický okres Hustopeče a od roku 1868 až do vytvoření samostatného okresu Břeclav v roce 1949 pod politický okres Hodonín.<br>
     Krátce před rokem 1222 se v Podivíně připomíná fara. Její dnešní budova byla postavena roku 1746. Počátky stavby kostela sv. Petra a Pavla jsou doloženy v první polovině 13.století. Novogotická věž kostela pochází z roku 1829. V bezprostřední blízkosti kostela se nachází kaple, zasvěcená sv. Cyrilovi a Metodějovi. Její vznik spadá do první poloviny 13. století. Dokonce se uvádí,že to bývala římská studna. Dalším památkově chráněným objektem je budova radnice v horní části náměstí, jejíž stavba pochází z roku 1852. Ve městě je řada velmi hodnotných barokních plastik: sousoší Immaculaty na náměstí z roku 1750, socha sv. Tekly u kostela z roku 1751, z roku 1742 pochází sv. Jan Nepomucký, kaplička sv.Anny z roku 1849, Boží muka u dálničního střediska z roku 1851.Hřbitovy jsou v Podivíně dva, křesťanský a židovský. Při vstupu na křesťanský hřbitov je brána z první poloviny 19. století s renesanční mříží  ze 17. století. Založení židovského hřbitova  lze položit nejpozději do konce 17.století. Obřadní síň u  židovského hřbitova je z druhé poloviny 19.století. První zmínky o školství v Podivíně spadají do roku 1564, kdy Jan ze Žerotína potvrdil jednotě bradské výsadu vyučování. První zmínka o městské škole je až z roku 1672. Součastná budova školy v dolní části náměstí byla zřízena roku 1875 knížetem Janem z Lichtenštejnů. V roce 1905 byla přistavěna měšťanská škola. Budova železniční stanice pochází z roku 1858 a přestavěna do dnešní podoby byla  v roce1974. Janův hrad ležící na katastrálním území Podivína byl vystavěn roku 1808.<br>
<br>
    Historické pohlednice, které zobrazují město Podivín pochází z období 1890, až po současnost. Dá se říci, že každá pohlednice je historická, protože zobrazuje určitý moment  v určitém období. První vyobrazení Podivína  je na Fabriciově mapě Moravy  z roku  1569. Na dalších  historických mapách  je zobrazení  Podivína pouze kartografickými značkami. Pouze na Mülerově mapě Moravy je zakreslen Podivín jako hradební město.<br><br>
	<div id='pohledVydal'  class='pohledVydal'>
Zdenek Hasilík, kronikář města Podivína
</div><br><br><hr>
<div id='pohledVydal'  class='pohledVydal'>
Fabriciova mapa Moravy z roku 1569<br><br>
</div>
<img  src="pohledyAll/FabriciovaMapa.jpg"  width="670" alt="Fabriciova Mapa" title="Fabriciova Mapa">
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
Vyobrazení Podivína na mapách Moravy  od Fabricia z let 1569 - 1570<br><br>
</div>
	<img  src="pohledyAll/FabriciusKostel.jpg"  width="670" alt="Fabricius - Kostel" title="Fabricius - Kostel">
	<br><br><br>
<div id='pohledVydal' class='pohledVydal'>
Vyobrazení Podivína na Müllerově mapě Moravy<br>jako hradební město   /1673-1721/<br><br>
</div><br><br>
<img src="pohledyAll/mueller.jpg" width="670" alt="Vyobrazení Podivína na Müllerově mapě Moravy" title="Vyobrazení Podivína na Müllerově mapě Moravy">
	<br><br><br>

<div id='pohledVydal' class='pohledVydal'>
Detail Podivína
</div><br><br>
		<img src="pohledyAll/mueller-kostel.jpg" width="670" alt="Detail Podivína" title="Detail Podivína">
	<br><br><br>
<div id='pohledVydal' class='pohledVydal'>
Další vyobrazení Podivína je kresba kostela sv.Petra a Pavla v roce 1719<br>na mapě přiložené k žádosti rakvických věřících.<br><br>
</div><br><br><br>
	<img src="pohledyAll/podivin1719.jpg" width="670" alt="Podivína- kostela sv.Petra a Pavla v roce 1719" title="Podivína- kostela sv.Petra a Pavla v roce 1719">
	<br><br><br>
<div id='pohledVydal' class='pohledVydal'>
Podivín 1719 - detail
</div><br><br>
<div id='pohledVydal' class='pohledVydal'>
<img src="pohledyAll/podivin1719v.jpg" width="350" alt="Podivín 1719 - detail" title="Podivín 1719 - detail">
</div>&nbsp;
		
	<br><br><br>	
<div id='pohledVydal' class='pohledVydal'>
V roce 1728 je již město Podivín zobrazeno na kresbě, která plošně zobrazuje ulice, náměstí, hradební příkopy, hřbitov a významné budovy.<br><br>
</div><br><br><br>
		<img src="pohledyAll/podivin1728.jpg" width="670" alt="Podivín 1728" title="Podivín 1728">
	<br><br>
Podivín r. 1728 při východu slunce.<br>

Dismas Josef Hynek von Hofer (1696-1747). Jeho zásluhou se nám   zachovaly dobové pohledy na řadu moravských měst z  první třetiny 18. století<br><br>
1.&nbsp;Kostel a věž,  2.&nbsp;Děkanát, 3.&nbsp;Radnice, 4.&nbsp;Prachárna, 5.&nbsp;Velká městská zeď, 6.&nbsp;Brána, 7.&nbsp;Městská zeď, 9.&nbsp;Předměstí, 10.&nbsp;Most u rybníka, 11.&nbsp;Hřbitov, 12.&nbsp;Náměstí, 13.&nbsp;Městský příkop.
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">

Úvod |<span class=zacatek><A href="000-strucna-historie-pohlednic-podivina.php">Historie</A></span> | <span class=zacatek><A href="001-pohlednice-podivin.php">Pohlednice</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 © Zdenek Hasilík  * Webmaster: Radek Kocourek <img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
<? include "phpPocitadloP.php" ?></BODY></HTML>


