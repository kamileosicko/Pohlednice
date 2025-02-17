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
<title>Pozdrav z Podiv�na</title>
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
                    window.location.href = '168-pohlednice-kostel-pozdrav-z-podivina.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '170-pohlednice-povoden-v-podivine-18-6-1926.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '168-pohlednice-kostel-pozdrav-z-podivina.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '170-pohlednice-povoden-v-podivine-18-6-1926.php') {
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
                        window.location.href = '170-pohlednice-povoden-v-podivine-18-6-1926.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '168-pohlednice-kostel-pozdrav-z-podivina.php'; // Swipe right to navigate to the previous page
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
<? include "phpLevyP6x.php" ?>
<? $p169="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP6.php" ?>
<div id='text1'  class='text1'>
<h1>Historick� pohlednice Podiv�na</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>Pozdrav z Podiv�na</span><br>
	<span class=s3>Pohlednice z roku 1926</span>
</div>
	<br><br><br>
	<hr>
<div id='pohledVydal'  class='pohledVydal'>
<img  src='pohledyAll/pohledy602.jpg'  width='436' alt='Pozdrav z Podiv�na' title='Pozdrav z Podiv�na'>
</div>
	
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
N�kladem Theobolda �torka v Podiv�n�.<br>
<br>
Pozdrav z Podiv�na. �kola a kostel.
<hr></div>
	
<br>
18.6.1926 - Z vydatn�ch de���, kter� v prvn� polovici m�s�ce �ervna v �ir� oblasti  nastaly, naplnilo se koryto �eky Dyje a jej�ch p��tok�, tak�e voda z b�eh� �eky Dyje vystoupila a zaplavila cel� inunda�n� �zem� od   Doln�ch  V�stonic a� po Lan�torf /Ladn�/. Bylo to pr�v� z po��tku senose�e, kdy povode� v Podiv�n� dos�hla nejv�t��ho bodu a pohled na val�c� se proud byl strhuj�c�. Voda prorvala a p�etrhala ochrann� hr�ze potoka Trkmanky a zaplavila lan�torvsk� louky, pod�l od Lan�torfa a spodn� ��sti zelnic a za Pad�lkama, dos�hla voda k cest� u �elezni�n� trat�. Tr�va na lok�ch v neb�val� slibn� sklizni a plodiny na rol�ch byly �pln� zni�eny a t�m, �e voda jen pozvolna opad�vala utvo�il se na povrchu luk �asn� povlak zvan� �abosk�ek. Povlaky v podob� le��c� plachty musely  se po odpadu vody ztrhati a odkl�zeti, nebo� pod nimi se tvo�ila hol� m�sta, tak�e ani otava v mnoh�ch m�stech nenarostla�.
<br><br><hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>�vod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='168-pohlednice-kostel-pozdrav-z-podivina.php'>p�edchoz�</A></span>  169/198 <span class=zacatek><A href='170-pohlednice-povoden-v-podivine-18-6-1926.php'>dal��</A></span>
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




