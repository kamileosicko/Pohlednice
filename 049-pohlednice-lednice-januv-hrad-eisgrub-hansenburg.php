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
<title>LEDNICE Janův hrad<br>EISGRUB Hansenburg</title>
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
                    window.location.href = '048-pohlednice-pozdrav-z-podivina-palackeho-trida-rybare.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '050-pohlednice-lednice-eisgrub-januv-hrad-die-hansenburg.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '048-pohlednice-pozdrav-z-podivina-palackeho-trida-rybare.php') {
                    links[i].setAttribute('title', 'Šipka vlevo');
                } else if (links[i].getAttribute('href') === '050-pohlednice-lednice-eisgrub-januv-hrad-die-hansenburg.php') {
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
                        window.location.href = '050-pohlednice-lednice-eisgrub-januv-hrad-die-hansenburg.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '048-pohlednice-pozdrav-z-podivina-palackeho-trida-rybare.php'; // Swipe right to navigate to the previous page
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
<? include "phpLevyP2x.php" ?>
<? $p49="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP2.php" ?>
<div id="text1"  class="text1">
<h1>Historické pohlednice Podivína</h1>
<div id="pohledNazev"  class="pohledNazev">
	<span class=s2>LEDNICE Janův hrad<br>EISGRUB Hansenburg</span><br>
	<span class=s3>Pohlednice pochází z roku 1940</span>
<hr></div>
	<br><br><br>
	<img  src="pohledyAll/pohledy191.jpg"  width="670" alt="LEDNICE Janův hrad EISGRUB Hansenburg" title="LEDNICE Janův hrad EISGRUB Hansenburg">
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
3584/6832
<hr></div>
	
<br>
"Janův hrad" (Janohrad) leží v katastrálním území Podivína u  řeky Dyje (staré koryto Dyje). Je součástí památek Lednicko- valtického areálu. 
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">
<span class=zacatek><A href="index.php">Úvod</A> | <A href="000-strucna-historie-pohlednic-podivina.php">Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href="048-pohlednice-pozdrav-z-podivina-palackeho-trida-rybare.php">předchozí</A></span>  49/198 <span class=zacatek><A href="050-pohlednice-lednice-eisgrub-januv-hrad-die-hansenburg.php">další</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 © Zdenek Hasilík (†)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>





