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
<title>"Pozdrav z Podiv�na" Palack�ho t��da - Ryb��e </title>
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
                    window.location.href = '047-pohlednice-pozdrav-z-podivin-gruss-aus-kostel-kostel-rybarska-ulice.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '049-pohlednice-lednice-januv-hrad-eisgrub-hansenburg.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '047-pohlednice-pozdrav-z-podivin-gruss-aus-kostel-kostel-rybarska-ulice.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '049-pohlednice-lednice-januv-hrad-eisgrub-hansenburg.php') {
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
                        window.location.href = '049-pohlednice-lednice-januv-hrad-eisgrub-hansenburg.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '047-pohlednice-pozdrav-z-podivin-gruss-aus-kostel-kostel-rybarska-ulice.php'; // Swipe right to navigate to the previous page
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
<? include "phpLevyP2x.php" ?>
<? $p48="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP2.php" ?>
<div id='text1'  class='text1'>
<h1>Historick� pohlednice Podiv�na</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>"Pozdrav z Podiv�na"<br>Palack�ho t��da - Ryb��e </span><br>
	<span class=s3>Jedna nejstar��ch pohlednic vydan� p�ed rokem 1900 </span>
<hr></div>
	<br><br><br>
	<img  src='pohledyAll/pohledy181.jpg'  width='670' alt='"Pozdrav z Podiv�na" Palack�ho t��da - Ryb��e ' title='"Pozdrav z Podiv�na" Palack�ho t��da - Ryb��e '>
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
5305
<hr></div>
	
<br>
Jedna nejstar��ch pohlednic vydan� p�ed rokem 1900 zobrazuje ��st ul. Palack�ho se sochou sv.Jana Nepomuck�ho. Doln� sn�mek zobrazuje d�ev�n� most, kter� spojuje Ryb��e s ostatn�m m�stem. Mal� domek na konci mostu je m�tnice. Ve XII. stolet� byla trhov� ves Slivnice (u Podiv�na ) je�t� majetkem zem�pansk�m, nebo� kn�e Sob�slav II.,zvl�tn� p��znivec stavu selsk�ho, daroval r.1178 mimo jin� kapitule vy�ehradsk� 4000 den�r� na trhov� vsi Slivnici a 2 h�ivny platu z m�ta Podiv�na. M�to se asi vyb�ralo na most� p�es Dyji pod hradem a n�le�elo, jako v�echna m�ta, kn�eti. Je�t�  v r.1890 zde st�vala na z�padn� stran� mostu v Ryb���ch  m�tov� z�vora. Tu tak� st�vala zd�n� m�tnice. Po zru�en� m�ta r.1891 zmizel "�ra�k" a brzy potom i "b�dka". Posledn�m n�jemn�m v�b�r��m mostn�ho m�ta byl Florian D�brava, kdysi cechmistr ryb��sk�ho cechu v Podiv�n�.
<br><br><hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>�vod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='047-pohlednice-pozdrav-z-podivin-gruss-aus-kostel-kostel-rybarska-ulice.php'>p�edchoz�</A></span>  48/198 <span class=zacatek><A href='049-pohlednice-lednice-januv-hrad-eisgrub-hansenburg.php'>dal��</A></span>
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








