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
<title>PORTÁL S PRVNÍ POLOVICE 13STOLETÍ OBJEVENÝ PŘI OPRAVĚ KOSTELA V PODIVÍNĚ</title>
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
                    window.location.href = '017-pohlednice-pozdrav-z-podivina.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '019-pohlednice-kostel-podivin.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '017-pohlednice-pozdrav-z-podivina.php') {
                    links[i].setAttribute('title', 'Šipka vlevo');
                } else if (links[i].getAttribute('href') === '019-pohlednice-kostel-podivin.php') {
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
                        window.location.href = '019-pohlednice-kostel-podivin.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '017-pohlednice-pozdrav-z-podivina.php'; // Swipe right to navigate to the previous page
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
<? include "phpLevyP1x.php" ?>
<? $p18="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP1.php" ?>
<div id="text1"  class="text1">
<h1>Historické pohlednice Podivína</h1>
<div id="pohledNazev"  class="pohledNazev">
	<span class=s2>PORTÁL S PRVNÍ POLOVICE 13.&nbsp;STOLETÍ<br>OBJEVENÝ PŘI OPRAVĚ<br>KOSTELA V PODIVÍNĚ</span><br>
	<span class=s3>r.1927</span>
</div>
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
	<hr><img  src="pohledyAll/pohledy072.jpg"  width="411" alt="PORTÁL S PRVNÍ POLOVICE 13STOLETÍ OBJEVENÝ PŘI OPRAVĚ KOSTELA V PODIVÍNĚ" title="PORTÁL S PRVNÍ POLOVICE 13. STOLETÍ OBJEVENÝ PŘI OPRAVĚ KOSTELA V PODIVÍNĚ">
</div>

	<br>	
<div id='pohledVydal'  class='pohledVydal'>
Zadní strana bez značení. Pouze linky pro adresu
<hr></div>
	
<br>
…Nález portálu byl nahlášen Státnímu památkovému úřadu v Brně, který ihned  vyslal znalce k jeho prozkoumání. Architekt Sochor přednosta SPÚ šetřením zjistil, že severozápadní stěna lodi chrámové od věže počínajíc, až po křížovou loď pochází ze XIII. století. Je do výšky 2,5 m z kvádrového zdiva o nestejných vrstvách, v němž nachází se románský portál s nepatrně lomeným obloukem. Tento portál byl buď hlavním vchodem do původního kostela, a nebo byla to tak zvaná "porta aurea", to je vchod vyhrazený panujícímu knížeti a dvoru. V tomto případě lze se domnívati, že v Podivíně sídlíval- aspoň časem - panující kníže.
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">
<span class=zacatek><A href="index.php">Úvod</A> | <A href="000-strucna-historie-pohlednic-podivina.php">Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href="017-pohlednice-pozdrav-z-podivina.php">předchozí</A></span>  18/198 <span class=zacatek><A href="019-pohlednice-kostel-podivin.php">další</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 © Zdenek Hasilík (†)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>






