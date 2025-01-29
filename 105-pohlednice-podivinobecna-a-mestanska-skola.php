 <!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<META content=cs http-equiv=Content-Language>
<META content='text/html; charset=windows-1250' http-equiv=Content-Type>
<meta name='robots' content='all,follow'>
<meta http-equiv='Content-Script-Type' content='text/javascript'>
<meta name='description' content='Star� pohlednice Podiv�na'>
<META name='keywords' content='pohlednice, sb�rka, podiv�n'>
<meta http-equiv='Content-Style-Type' content='text/css'>
<link rel='stylesheet' type='text/css' href='cssPohlednice.css'>
<title>PODIV�N<br>Obecn� a m욝ansk� �kola.</title>
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
                    window.location.href = '104-pohlednice-pozdrav-z-podivina.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '106-pohlednice-pozdrav-z-podivina-mestanska-a-obecna-skola.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '104-pohlednice-pozdrav-z-podivina.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '106-pohlednice-pozdrav-z-podivina-mestanska-a-obecna-skola.php') {
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
                        window.location.href = '106-pohlednice-pozdrav-z-podivina-mestanska-a-obecna-skola.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '104-pohlednice-pozdrav-z-podivina.php'; // Swipe right to navigate to the previous page
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
<? include "phpLevyP4x.php" ?>
<? $p105="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP4.php" ?>
<div id='text1'  class='text1'>
<h1>Historick� pohlednice Podiv�na</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>PODIV�N<br>Obecn� a m욝ansk� �kola.</span><br>
	<span class=s3>Pohlednice poch�z� z 30.let</span>
<hr></div>
	<br><br><br>
	<img  src='pohledyAll/pohledy382.jpg'  width='670' alt='PODIV�N Obecn� a m욝ansk� �kola.' title='PODIV�N Obecn� a m욝ansk� �kola.'>
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
Atelier Roedel v Podiv�n�.<br><br>
N�kladem G. Vyskota v Podiv�n�<br><br>

<hr></div>
	
<br>
Z v��tu �kol z roku 1925. Sm�en� p�tit��dn� obecn� �kola s 273 ��ky, trojt��dn� ob�ansk� �kola chlapeck� s 140 ��ky, trojt��dn� ob�ansk� �kola d�v�� s 85 ��kyn�mi, dvou ro�n�kov� �ivnostensk� �kola pokra�ovac� s 69 ��ky a dvouro�n�  odborn� �kola hospod��sk� s 51 ��ky.
<br><br><hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>�vod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='104-pohlednice-pozdrav-z-podivina.php'>p�edchoz�</A></span>  105/198 <span class=zacatek><A href='106-pohlednice-pozdrav-z-podivina-mestanska-a-obecna-skola.php'>dal��</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->
<div class='pata'>
</div><!--konec pata-->
<div class='pataD'>
<br>Copyright - 2013 � Zdenek Hasil�k (�)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>





