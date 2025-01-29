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
<title>Podiv�n na pohlednic�ch</title>
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
                if (event.key === 'ArrowRight') {
                    window.location.href = '000-strucna-historie-pohlednic-podivina.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '000-strucna-historie-pohlednic-podivina.php') {
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
                        window.location.href = '000-strucna-historie-pohlednic-podivina.php'; // Swipe left to navigate to the next page
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
<? include "phpLevyPax.php" ?>
<? include "phpLevyPa.php" ?>
<div id="text1"  class="text1">
<h1>Podiv�n na pohlednic�ch</h1>

     M�sto Podiv�n je jedn�m z nejstar��ch m�st na Morav�, kter� je uv�d�no v Kosmov� kronice k r.1067 jako hrad Podiuin, le��c� uprost�ed �eky Svratky (tj. nyn� Dyje). N�zev m�sta Kostel - Kostl, je jm�no m�sta, kter� se uv�d� ve star�ch dokumentech od r.1248.<br>
     A� do po��tku 15. stolet� bylo m�sto v rukou zem�pansk�ch, pot� bylo d�v�no do z�stavy. V roce 1559 je z�skal Jan ze �erot�na. Od t�to doby sd�l� Podiv�n osudy s panstv�m b�eclavsk�m, kter� se roku 1638 dostalo sp�t do majetku Lichten�tejn�. V roce 1850 byl Podiv�n za�len�n pod politick� okres Hustope�e a od roku 1868 a� do vytvo�en� samostatn�ho okresu B�eclav v roce 1949 pod politick� okres Hodon�n.<br>
     Kr�tce p�ed rokem 1222 se v Podiv�n� p�ipom�n� fara. Jej� dne�n� budova byla postavena roku 1746. Po��tky stavby kostela sv. Petra a Pavla jsou dolo�eny v prvn� polovin� 13.stolet�. Novogotick� v� kostela poch�z� z roku 1829. V bezprost�edn� bl�zkosti kostela se nach�z� kaple, zasv�cen� sv. Cyrilovi a Metod�jovi. Jej� vznik spad� do prvn� poloviny 13. stolet�. Dokonce se uv�d�,�e to b�vala ��msk� studna. Dal��m pam�tkov� chr�n�n�m objektem je budova radnice v horn� ��sti n�m�st�, jej� stavba poch�z� z roku 1852. Ve m�st� je �ada velmi hodnotn�ch barokn�ch plastik: souso�� Immaculaty na n�m�st� z roku 1750, socha sv. Tekly u kostela z roku 1751, z roku 1742 poch�z� sv. Jan Nepomuck�, kapli�ka sv.Anny z roku 1849, Bo�� muka u d�lni�n�ho st�ediska z roku 1851.H�bitovy jsou v Podiv�n� dva, k�es�ansk� a �idovsk�. P�i vstupu na k�es�ansk� h�bitov je br�na z prvn� poloviny 19. stolet� s renesan�n� m���  ze 17. stolet�. Zalo�en� �idovsk�ho h�bitova  lze polo�it nejpozd�ji do konce 17.stolet�. Ob�adn� s�� u  �idovsk�ho h�bitova je z druh� poloviny 19.stolet�. Prvn� zm�nky o �kolstv� v Podiv�n� spadaj� do roku 1564, kdy Jan ze �erot�na potvrdil jednot� bradsk� v�sadu vyu�ov�n�. Prvn� zm�nka o m�stsk� �kole je a� z roku 1672. Sou�astn� budova �koly v doln� ��sti n�m�st� byla z��zena roku 1875 kn�etem Janem z Lichten�tejn�. V roce 1905 byla p�istav�na m욝ansk� �kola. Budova �elezni�n� stanice poch�z� z roku 1858 a p�estav�na do dne�n� podoby byla  v roce1974. Jan�v hrad le��c� na katastr�ln�m �zem� Podiv�na byl vystav�n roku 1808.<br>
<br>
    Historick� pohlednice, kter� zobrazuj� m�sto Podiv�n poch�z� z obdob� 1890, a� po sou�asnost. D� se ��ci, �e ka�d� pohlednice je historick�, proto�e zobrazuje ur�it� moment  v ur�it�m obdob�. Prvn� vyobrazen� Podiv�na  je na Fabriciov� map� Moravy  z roku  1569. Na dal��ch  historick�ch map�ch  je zobrazen�  Podiv�na pouze kartografick�mi zna�kami. Pouze na M�lerov� map� Moravy je zakreslen Podiv�n jako hradebn� m�sto.<br><br>
	<div id='pohledVydal'  class='pohledVydal'>
Zdenek Hasil�k, kronik�� m�sta Podiv�na
</div><br><br><hr>
<div id='pohledVydal'  class='pohledVydal'>
Fabriciova mapa Moravy z roku 1569<br><br>
</div>
<img  src="pohledyAll/FabriciovaMapa.jpg"  width="670" alt="Fabriciova Mapa" title="Fabriciova Mapa">
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
Vyobrazen� Podiv�na na map�ch Moravy  od Fabricia z let 1569 - 1570<br><br>
</div>
	<img  src="pohledyAll/FabriciusKostel.jpg"  width="670" alt="Fabricius - Kostel" title="Fabricius - Kostel">
	<br><br><br>
<div id='pohledVydal' class='pohledVydal'>
Vyobrazen� Podiv�na na M�llerov� map� Moravy<br>jako hradebn� m�sto   /1673-1721/<br><br>
</div><br><br>
<img src="pohledyAll/mueller.jpg" width="670" alt="Vyobrazen� Podiv�na na M�llerov� map� Moravy" title="Vyobrazen� Podiv�na na M�llerov� map� Moravy">
	<br><br><br>

<div id='pohledVydal' class='pohledVydal'>
Detail Podiv�na
</div><br><br>
		<img src="pohledyAll/mueller-kostel.jpg" width="670" alt="Detail Podiv�na" title="Detail Podiv�na">
	<br><br><br>
<div id='pohledVydal' class='pohledVydal'>
Dal�� vyobrazen� Podiv�na je kresba kostela sv.Petra a Pavla v roce 1719<br>na map� p�ilo�en� k ��dosti rakvick�ch v���c�ch.<br><br>
</div><br><br><br>
	<img src="pohledyAll/podivin1719.jpg" width="670" alt="Podiv�na- kostela sv.Petra a Pavla v roce 1719" title="Podiv�na- kostela sv.Petra a Pavla v roce 1719">
	<br><br><br>
<div id='pohledVydal' class='pohledVydal'>
Podiv�n 1719 - detail
</div><br><br>
<div id='pohledVydal' class='pohledVydal'>
<img src="pohledyAll/podivin1719v.jpg" width="350" alt="Podiv�n 1719 - detail" title="Podiv�n 1719 - detail">
</div>&nbsp;
		
	<br><br><br>	
<div id='pohledVydal' class='pohledVydal'>
V roce 1728 je ji� m�sto Podiv�n zobrazeno na kresb�, kter� plo�n� zobrazuje ulice, n�m�st�, hradebn� p��kopy, h�bitov a v�znamn� budovy.<br><br>
</div><br><br><br>
		<img src="pohledyAll/podivin1728.jpg" width="670" alt="Podiv�n 1728" title="Podiv�n 1728">
	<br><br>
Podiv�n r. 1728 p�i v�chodu slunce.<br>

Dismas Josef Hynek von Hofer (1696-1747). Jeho z�sluhou se n�m   zachovaly dobov� pohledy na �adu moravsk�ch m�st z  prvn� t�etiny 18. stolet�<br><br>
1.&nbsp;Kostel a v�,  2.&nbsp;D�kan�t, 3.&nbsp;Radnice, 4.&nbsp;Prach�rna, 5.&nbsp;Velk� m�stsk� ze�, 6.&nbsp;Br�na, 7.&nbsp;M�stsk� ze�, 9.&nbsp;P�edm�st�, 10.&nbsp;Most u rybn�ka, 11.&nbsp;H�bitov, 12.&nbsp;N�m�st�, 13.&nbsp;M�stsk� p��kop.
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">

�vod |<span class=zacatek><A href="000-strucna-historie-pohlednic-podivina.php">Historie</A></span> | <span class=zacatek><A href="001-pohlednice-podivin.php">Pohlednice</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 � Zdenek Hasil�k  * Webmaster: Radek Kocourek <img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
<? include "phpPocitadloP.php" ?></BODY></HTML>


