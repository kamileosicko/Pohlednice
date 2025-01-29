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
<title>Stručná historie pohlednic</title>
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
                if (event.key === 'ArrowLeft') {
                    window.location.href = 'index.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '001-pohlednice-podivin.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === 'index.php') {
                    links[i].setAttribute('title', 'Šipka vlevo');
                } else if (links[i].getAttribute('href') === '001-pohlednice-podivin.php') {
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
                        window.location.href = '001-pohlednice-podivin.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = 'index.php'; // Swipe right to navigate to the previous page
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
<h1>Stručná historie pohlednic</h1>
     Odborníci nejsou jednotni v názoru, kdo má nárok na pomyslnou palmu prvenství při výrobě první pohlednice /uvádí se tzv. Mulreadyho obálka s obrázkem vydaná 1. 5. 1840 v Británii/. Vznik skutečné pohlednice velmi úzce souvisí s filatelií. Vynález korespondenčního lístku 1865 v Německu / dr. Heinrich Stephan / nebyl přijat. O jeho vynálezu se dozvědělo rakousko - uherské ministerstvo pošt a v září roku 1869 se v jeho zemích, to znamená i u nás, začal poprvé na světě používat korespondenční lístek. Na korespondenčním lístku nebyl žádný obrázek. Nejsou to proto pohlednice, ale bez zavedení "koresponďáků" do poštovnictví by zřejmě neexistovaly klasické pohlednice. Jako první  pohlednici na světě je uznáván korespondenční lístek, na jehož levé straně je obrázek se scénou ze života dělostřelců v prusko - francouzské válce. Stalo se tak 16. července 1870 v Oldenburku v Německu. <br>
     V roce 1881 se v Evropě prodalo přes 300 miliónů pohlednic. Po roce 1890 jich již bylo vytištěno více než 2 miliardy. Dnes nikdo neví kolik miliard pohlednic bylo vytištěno. <br>
     Nejstarší pohlednice jsou tištěny litograficky (litografie = kamenotisk) Barevným litografickým tiskům se někdy říká chromolitografie. Od 80. let 19.století existovaly také fotopohlednice tištěné technikou světlotisku a ručně kolorované ( domalované ). Později se fotopohlednice začaly tisknout technikou hlubotisku, která je pracnější než světlotisk, ale mnohem dokonalejší. Úplně nakonec se k tisku začala používat technika zvaná  ofset, která se používá dodnes. Po roce 2000 vstoupila do tisku pohlednic digitalizace, která vytvořila zlom v tisku pohlednic. Sběratelsky se pohlednice rozlišují podle žánru, který zobrazují /místopis, válečné, přání svatební, květiny, ptáci, obrazy  atd.<br>
<br>
     První pohlednice Podivína se začaly vydávat ve Vídni, kde byly první fotografické ateliéry. Ty tiskly pohledy na zakázku obchodníků, kteří  je zároveň prodávaly. V Podivíně byl prvním  fotograf, který pořídil snímek pro pohlednici  David Konstandt. Bohužel se nepodařilo zjistit, kde měl ateliér /ul.Kopce ?/. Fotografoval v létech 1890 - 1910. V tomto období do roku 1913 měl postavený dřevěný ateliér na ul.Bratislavské fotograf Emil Šauman /*17.1.1868/. <br>
<br><br>
<div id='pohledVydal'  class='pohledVydal'>
První podivínský fotograf David Konstandt 
/zadní strana fotografie/
<br><br>
</div>
<div id='pohledVydal'  class='pohledVydal'>
<img  src="pohledyAll/konstand.jpg"  width="350" alt="První podivínský fotograf David Konstandt " title="První podivínský fotograf David Konstandt ">
</div>
&nbsp;
	<br><br><br>

<div id='pohledVydal'  class='pohledVydal'>
Ulice Bratislavská – šipka ukazuje, kde stával ateliér Emila Šaumana<br>/byla to dřevěná stavba/<br><br>
</div>
<img  src="pohledyAll/sauman.jpg"  width="670" alt="Ateliér Emila Šaumana" title="Ateliér Emila Šaumana">
	<br><br><br>

V roce 1913 přichází do Podivína  vídeňský fotograf Karel Roedel /*30.5.1880/. Za manželku si vzal  Annu Svobodovou /*28.8.1883/ v Podivíně. Atelier si zařídil na ul.Palackého č.p.422/10, kde začal provozovat fotografickou  činnost. V roce 1927 si postavil na ul. Sokolské č.p.508/8 nový ateliér, který měl skleněnou střechu. Karel Roedel byl význačný regionální fotograf. Ze širokého okolí se zde chodili fotografovat obyvatelé Rakvic, Velkých Bílovic, Žižkova, Velkých Pavlovic, Bořetic, Vrbice a Ladné. Většinou to byli svatební, hodové, rodinné a portrétní fotografie. Fotografickou činnost zaměřil i na záběry Podivína, které se vydávaly na pohlednicích. 
<br><br><br><div id='pohledVydal'  class='pohledVydal'>
Atelier Roedel na ul.Palackého<br><br>
</div>
<img  src="pohledyAll/RoedelPalackeho.jpg"  width="670" alt="Atelier Roedel na ul.Palackého" title="Atelier Roedel na ul.Palackého">
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
Atelier Roedel na ul. Sokolská<br><br>
</div>
<img  src="pohledyAll/RoedelSokolska.jpg"  width="670" alt="Atelier Roedel na ul. Sokolská" title="Atelier Roedel na ul. Sokolská">
	<br><br><br>
V roce 1933 provozoval fotografickou činnost i fotograf Balon, který měl atelier ve dvoře u Štěpinů ul.Havlíčkova 532/1. Jeho činnost se zaměřila jen na portrétní fotografie. Atelier opustil po roce 1939 a atelier převzala fotografka Leopolda Šaumanová /*16.11.1906/, která zde provozovala činnost do roku 1945. Vydala několik fotografií pohlednic /interiér kostela/.  V roce 1945 dobrovolně opustil Podivín Karel Roedel /německá národnost/ a jeho atelier odkoupila L.Šaumanová.se svým synem Čestmírem Šaumanem /*9.2.1925/. Atelier na ul. Sokolské po roce 1948 byl zestátněn a přešel pod státní podnik Služby města Břeclavi. Provoz ukončil v roce 1975, kdy byl přestavěn na mateřskou školku. Foto a vydávaní pohlednic přešlo v 60.létech na státní podnik ORBIS Praha. Po roce 1991 začaly vydávat pohlednice svým nákladem  podnikatelé /Hotel ARCADE/ a další instituce /farní kostel v Podivíně - farář Pavel Křivý/.  V roce 2000 vydal sérii pohledů Podivína již v digitální podobě fotograf Ondřej Čapka /*3.2.1975/, který měl ateliér a prodejnu na ul.Komenského č. 264.
	<br><br><br>
	<div id='pohledVydal'  class='pohledVydal'>
Fotografie ze dvora p.Štěpiny, kde bývala opravárenské dílna. Vzadu za dvojicí mechaniků je vidět  střecha ateliéru /prosklené střešní okno/<br><br>
</div>
<img  src="pohledyAll/stepina.jpg"  width="670" alt="Atelier Roedel na ul.Palackého" title="Atelier Roedel na ul.Palackého">
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
V sedmdesátých létech se nedostávalo míst v mateřské škole /ul. Stará  čtvrť/ Děti chodily i do tříd na st.radnici, došlo k rozhodnutí postavit školku na ul.Sokolské z bývalého fotografického ateliéru.<br><br>
</div>
<img  src="pohledyAll/skolka.jpg"  width="670" alt="Atelier Roedel na ul. Sokolská" title="Atelier Roedel na ul. Sokolská">
<br><br><hr>
Závěrem chci poděkovat všem, kteří  poskytli pohlednice k této publikaci. Sestavení této publikace trvalo celkem deset let. Podařilo se mě získat k ofocení přes 200 pohlednic. Vím o několika dalších /5-10ks/, které se nepodařilo dohledat. Náměty na pohlednicích se ve většině případů opakují, tak jsem přistoupil k popisu pohlednic  ze školních a městských kronik. <br>
<br>
 Zdenek Hasilík   r. 2012
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">
<span class=zacatek><A href="index.php">Úvod</A></span> | Historie | <span class=zacatek><A href="001-pohlednice-podivin.php">Pohlednice</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 © Zdenek Hasilík (†)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
<? include "phpPocitadloP.php" ?></BODY></HTML>



