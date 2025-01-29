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
<title>PODIV�N - JANODRAD Most u Janohradu: </title>
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
                    window.location.href = '090-pohlednice-zamecky-areal-lednice-valtice.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '092-pohlednice-pozdrav-z-podivina.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '090-pohlednice-zamecky-areal-lednice-valtice.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '092-pohlednice-pozdrav-z-podivina.php') {
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
                        window.location.href = '092-pohlednice-pozdrav-z-podivina.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '090-pohlednice-zamecky-areal-lednice-valtice.php'; // Swipe right to navigate to the previous page
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
<? $p91="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP3.php" ?>
<div id='text1'  class='text1'>
<h1>Historick� pohlednice Podiv�na</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>PODIV�N - JANODRAD Most u Janohradu: </span><br>
	<span class=s3>Pohlednice Janohradu z roku 1920</span>
</div>
	<br><br><br>
	<hr>
	<div id='pohledVydal'  class='pohledVydal'>
<img  src='pohledyAll/pohledy331.jpg'  width='434' alt='PODIV�N - JANODRAD Most u Janohradu: ' title='PODIV�N - JANODRAD Most u Janohradu: '>

</div>

	<br>	
<div id='pohledVydal'  class='pohledVydal'>
Atelier Roedel v Podiv�n� - <br>
N�kladem G. Vyskota v Podiv�n�

<hr></div>
	
<br>
Po vzniku samostatn�ho �eskoslovenska r. 1920 byl Janohrad obydlen jen spr�vcem, kter� ho udr�oval. Most u Janohradu by sou��sti z�meck� cesty do Lednice. V roce 1939 po zabr�n� pohrani�� a vzniku  protektor�tu �ech a Moravy byl hrani�n�m mostem mezi  Velk�m N�meckem a protektor�tem.  Dyje tvo�ila hranici. V roce 1945 p�i �stupu  n�meck�ch vojsk byl most zni�en a do sou�asnosti ji� neobnoven. Z�staly zde jen kamenn� mostn� pil��e. Dnes na stran� od Podiv�na zde stoj� kapli�ka /L.Kristka/ postaven� v roce 2006. 
<br><br><hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>�vod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='090-pohlednice-zamecky-areal-lednice-valtice.php'>p�edchoz�</A></span>  91/198 <span class=zacatek><A href='092-pohlednice-pozdrav-z-podivina.php'>dal��</A></span>
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




