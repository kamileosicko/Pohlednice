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
<title>LEDNICKO-VALTICKÝ AREÁL</title>
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
                    window.location.href = '070-pohlednice-lednice.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '072-pohlednice-lednice-januv-hrad.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '070-pohlednice-lednice.php') {
                    links[i].setAttribute('title', 'Šipka vlevo');
                } else if (links[i].getAttribute('href') === '072-pohlednice-lednice-januv-hrad.php') {
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
                        window.location.href = '072-pohlednice-lednice-januv-hrad.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '070-pohlednice-lednice.php'; // Swipe right to navigate to the previous page
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
<? $p71="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP3.php" ?>
<div id='text1'  class='text1'>
<h1>Historické pohlednice Podivína</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>LEDNICKO-VALTICKÝ AREÁL</span><br>
	<span class=s3>Pohlednice vydaná v roce 1999</span>
</div>
	<br><br><br>
	<hr>
	<div id='pohledVydal'  class='pohledVydal'>
<img  src='pohledyAll/pohledy261.jpg'  width='459' alt='LEDNICKO-VALTICKÝ AREÁL' title='LEDNICKO-VALTICKÝ AREÁL'>
	
</div>
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
Lednicko-valtický areál<br>
Zámek Lednice * Hraniční zameček<br>
Minaret * Janohrad<br>
©Foto: Miroslav Klepáček<br>
©Nakladatelství SURSUM  1999<br>

<hr></div>
	
<br>
Umělá zřícenina Janova hradu: Architekt Josef Hardtmuth objel desítky zřícenin v různých koutech světa kvůli inspiraci. Imitace středověké zříceniny hradu byla nakonec postavena na dřevěných pilotech a roštech v místě, které ze tří stran obtéká řeka Dyje, ale ani přes každoroční povodně nebylo nikdy zatopeno.<br>
Janohrad fungoval jako místo pro lovecké hostiny, které se konaly v rytířském sále. Z ochozu troubili trubači začátek a konec lovu. Pro unavené hosty byly k dispozici okolní salóny.<br>

<br><br><hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>Úvod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='070-pohlednice-lednice.php'>předchozí</A></span>  71/198 <span class=zacatek><A href='072-pohlednice-lednice-januv-hrad.php'>další</A></span>
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




