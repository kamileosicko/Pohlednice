 <!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<META content=cs http-equiv=Content-Language>
<META content='text/html; charset=windows-1250' http-equiv=Content-Type>
<meta name='robots' content='all,follow'>
<meta http-equiv='Content-Script-Type' content='text/javascript'>
<meta name='description' content='Staré pohlednice Podivína'>
<META name='keywords' content='pohlednice, sbírka, podivín'>
<meta http-equiv='Content-Style-Type' content='text/css'>
<link rel='stylesheet' type='text/css' href='cssPohlednice.css'>
<title>Pozdrav z Podivína - Gruß aus Kostel</title>
<link rel='shortcut icon' type='image/x-icon' href='favicon.ico'>
<meta http-equiv='Cache-control' content='no-cache'>
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
                    window.location.href = '094-pohlednice-gruss-aus-kostel-garten-aussicht-bahnol-bahnstasse.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '096-pohlednice-pozdrav-z-podivinacelkovy-pohled.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '094-pohlednice-gruss-aus-kostel-garten-aussicht-bahnol-bahnstasse.php') {
                    links[i].setAttribute('title', 'Šipka vlevo');
                } else if (links[i].getAttribute('href') === '096-pohlednice-pozdrav-z-podivinacelkovy-pohled.php') {
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
                        window.location.href = '096-pohlednice-pozdrav-z-podivinacelkovy-pohled.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '094-pohlednice-gruss-aus-kostel-garten-aussicht-bahnol-bahnstasse.php'; // Swipe right to navigate to the previous page
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
<body class='hlavni''>
<div id='hlavaindex' class='hlavaindex'>
<div class='pohledHlava'>
<A href='index.php'><img  src="pohledHlava.jpg"  width="1000" alt="pohlednice"  vspace="0" hspace="0" ></A>
</div><!--konec hlavaIndexV-->
<hr>
<div id='obsah'  class='obsah'>
<? include "phpLevyP3x.php" ?>
<? $p95="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP3.php" ?>
<div id='text1'  class='text1'>
<h1>Historické pohlednice Podivína</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>Pozdrav z Podivína<br>Gruß aus Kostel<br></span>
	<span class=s3SB>
Kirche - Kostel, Fabrik - Fabrika,<br>Bahnhof - Nádraží, Hauptstrasse - Hlavní silnice.<br></span><br>
	<span class=s3>Černobílá čtyřdílná pohlednice zaslaná v roce 1900</span>
<hr></div>
	<br><br><br>
	<img  src='pohledyAll/pohledy351.jpg'  width='670' alt='Pozdrav z Podivína Gruß aus Kostel' title='Pozdrav z Podivína Gruß aus Kostel'>
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
Korrespondez -Karte.<br>
Korespondenční lístek.
<hr></div>
	
<br>
Pohlednice je zdobena kartušemi doplněnými květinovým dekorem. První obrázek zachycuje horní část náměstí radnicí a kostelem. Druhý obrázek hlavní silnici vycházející z náměstí. Spodní snímek zachycuje železniční trať a silnící vedoucí do Břeclavi. V pozadí je cukrovar. Čtvrtý snímek zachycuje nádražní budovu.
<br><br><hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>Úvod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='094-pohlednice-gruss-aus-kostel-garten-aussicht-bahnol-bahnstasse.php'>předchozí</A></span>  95/198 <span class=zacatek><A href='096-pohlednice-pozdrav-z-podivinacelkovy-pohled.php'>další</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->
<div class='pata'>
</div><!--konec pata-->
<div class='pataD'>
<br>Copyright - 2013 © Zdenek Hasilík (†)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>





