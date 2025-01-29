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
<title>Podiv�n</title>
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
                    window.location.href = '030-pohlednice-podivin-kostel.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '032-pohlednice-podivin.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '030-pohlednice-podivin-kostel.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '032-pohlednice-podivin.php') {
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
                        window.location.href = '032-pohlednice-podivin.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = '030-pohlednice-podivin-kostel.php'; // Swipe right to navigate to the previous page
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
<? $p31="<img src='pm/tento.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP1.php" ?>
<div id="text1"  class="text1">
<h1>Historick� pohlednice Podiv�na</h1>
<div id="pohledNazev"  class="pohledNazev">
	<span class=s2>Podiv�n</span><br>
	<span class=s3>Pohlednice pomn�ku padl�ch  prvn� sv�tov� v�lce poch�z� z roku 1930</span>
<hr></div>
	<br><br><br>
	
<div id='pohledVydal'  class='pohledVydal'>
<img  src="pohledyAll/pohledy121.jpg"  width="418" alt="Podiv�n" title="Podiv�n">
</div>	
	<br>	
<div id='pohledVydal'  class='pohledVydal'>
Bez ozna�en�
<hr></div>
	
<br>
Popud k postaven� pomn�ku padl�ch ve sv�tov� v�lce vy�el od jednoty legion��sk� v r. 1922. Byla zalo�ena vkladn� kn�ka,kde byly ukl�d�ny pen�ze na stavbu pomn�ku. Projekt vypracoval J.Rudolf, jen� zn�zor�oval pomn�k  z jehlanu na kmeni z le�t�n� slezsk� �uly se jm�ny padl�ch a nezv�stn�ch voj�n�. Bronzov� reli�f prezidenta T.G.Masaryka byl zad�n socha�i R. Mikulovi z Klobouk u Brna. Za dozoru zednick�ch mistr� J.Rudolfa a L. Ko�eluhy  byl b�hem letn�ch m�s�c� postaven a slavnost jeho odhalen� ur�ena na den 28. ��jna 1930. Do schr�nky byl vlo�en pam�tn� list sepsan� B.Sieglem a ulo�en do pomn�ku k prsti z boji�t� u  Zborova, kterou opat�il F.Hasil�k. M�sto ulo�en� t�chto pam�tek ozna�uje kovov� schr�nka na pomn�ku.
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">
<span class=zacatek><A href="index.php">�vod</A> | <A href="000-strucna-historie-pohlednic-podivina.php">Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href="030-pohlednice-podivin-kostel.php">p�edchoz�</A></span>  31/198 <span class=zacatek><A href="032-pohlednice-podivin.php">dal��</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 � Zdenek Hasil�k (�)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>






