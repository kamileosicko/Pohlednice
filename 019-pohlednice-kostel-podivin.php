 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<META content=cs http-equiv=Content-Language>
<META content="text/html; charset=windows-1250" http-equiv=Content-Type>
<meta name="robots" content="all,follow">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="description" content="Star� pohlednice Podiv�na">
<META name="keywords" content="pohlednice, sb�rka, podiv�n">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" type="text/css" href="cssPohlednice.css">
<title>KOSTEL - PODIV�N</title>
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
                    window.location.href = '018-pohlednice-portal-s-prvni-polovice-13stoleti-objeveny-pri-oprave-kostela-v-podivine.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '020-pohlednice-podivin.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '018-pohlednice-portal-s-prvni-polovice-13stoleti-objeveny-pri-oprave-kostela-v-podivine.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '020-pohlednice-podivin.php') {
                    links[i].setAttribute('title', '�ipka vpravo');
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
                        window.location.href = '020-pohlednice-podivin.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '018-pohlednice-portal-s-prvni-polovice-13stoleti-objeveny-pri-oprave-kostela-v-podivine.php'; // Swipe right to navigate to the previous page
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
<? $p19="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP1.php" ?>
<div id="text1"  class="text1">
<h1>Historick� pohlednice Podiv�na</h1>
<div id="pohledNazev"  class="pohledNazev">
	<span class=s2>KOSTEL - PODIV�N</span><br>
	<span class=s3>Pohlednice zaslan� v roce 1945<br>byla vydan� za  2.sv�tov� v�lky. </span>
<hr></div>
	<br><br><br>
	
<div id='pohledVydal'  class='pohledVydal'>
	<img  src="pohledyAll/pohledy071.jpg"  width="423" alt="KOSTEL - PODIV�N" title="KOSTEL - PODIV�N">
</div>
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
KOSTEL - Kirche<br>
PODIV�N - Kostel<br>
<br>
GRAFO �UDA  - HOLICE  - V�<br>

<hr></div>
	
<br>
�Podiv�n m�l sv�j kostel ji� XI. stolet�. byl to bezpochyby d�ev�n� kostel�k, pozd�ji zd�n� ve slohu rom�nsk�m. N�lez port�lu nasv�d�uje pak, �e kostel byl ve XIII. stolet� p�estav�n ve slohu gotick�m. Tehdy n�le�ely k farnosti podiv�nsk�, kter� byla prebendou olomouck� kapituly, je�t� Lan�torf  /Ladn�/, Vel.B�lovice, Rakvice, P��tluky a zanikl� Makovice u P��tluk. V XVI. stolet� kostel n�kolikr�t vyho�el, zejm�na roku 1541 a 1581 a byl znovu p�estav�n. Z tohoto kostela dochovaly se mimo jin� i �etn� gotick� podp�ry v nyn�j��m kostele, kter� byl vystav�n v barokn�m slohu v XVIII. stolet�.
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">
<span class=zacatek><A href="index.php">�vod</A> | <A href="000-strucna-historie-pohlednic-podivina.php">Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href="018-pohlednice-portal-s-prvni-polovice-13stoleti-objeveny-pri-oprave-kostela-v-podivine.php">p�edchoz�</A></span>  19/198 <span class=zacatek><A href="020-pohlednice-podivin.php">dal��</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 � Zdenek Hasil�k (�)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>






