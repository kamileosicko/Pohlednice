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
<title>Stru�n� historie pohlednic</title>
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
                    window.location.href = 'index.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '001-pohlednice-podivin.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === 'index.php') {
                    links[i].setAttribute('title', '�ipka vlevo');
                } else if (links[i].getAttribute('href') === '001-pohlednice-podivin.php') {
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
                        window.location.href = '001-pohlednice-podivin.php'; // Swipe left to navigate to the next page
                    } else if (deltaX > 0) {
                        window.location.href = 'index.php'; // Swipe right to navigate to the previous page
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
<h1>Stru�n� historie pohlednic</h1>
     Odborn�ci nejsou jednotni v n�zoru, kdo m� n�rok na pomyslnou palmu prvenstv� p�i v�rob� prvn� pohlednice /uv�d� se tzv. Mulreadyho ob�lka s obr�zkem vydan� 1. 5. 1840 v Brit�nii/. Vznik skute�n� pohlednice velmi �zce souvis� s filateli�. Vyn�lez koresponden�n�ho l�stku 1865 v N�mecku / dr. Heinrich Stephan / nebyl p�ijat. O jeho vyn�lezu se dozv�d�lo rakousko - uhersk� ministerstvo po�t a v z��� roku 1869 se v jeho zem�ch, to znamen� i u n�s, za�al poprv� na sv�t� pou��vat koresponden�n� l�stek. Na koresponden�n�m l�stku nebyl ��dn� obr�zek. Nejsou to proto pohlednice, ale bez zaveden� "korespon��k�" do po�tovnictv� by z�ejm� neexistovaly klasick� pohlednice. Jako prvn�  pohlednici na sv�t� je uzn�v�n koresponden�n� l�stek, na jeho� lev� stran� je obr�zek se sc�nou ze �ivota d�lost�elc� v prusko - francouzsk� v�lce. Stalo se tak 16. �ervence 1870 v Oldenburku v N�mecku. <br>
     V roce 1881 se v Evrop� prodalo p�es 300 mili�n� pohlednic. Po roce 1890 jich ji� bylo vyti�t�no v�ce ne� 2 miliardy. Dnes nikdo nev� kolik miliard pohlednic bylo vyti�t�no. <br>
     Nejstar�� pohlednice jsou ti�t�ny litograficky (litografie = kamenotisk) Barevn�m litografick�m tisk�m se n�kdy ��k� chromolitografie. Od 80. let 19.stolet� existovaly tak� fotopohlednice ti�t�n� technikou sv�tlotisku a ru�n� kolorovan� ( domalovan� ). Pozd�ji se fotopohlednice za�aly tisknout technikou hlubotisku, kter� je pracn�j�� ne� sv�tlotisk, ale mnohem dokonalej��. �pln� nakonec se k tisku za�ala pou��vat technika zvan�  ofset, kter� se pou��v� dodnes. Po roce 2000 vstoupila do tisku pohlednic digitalizace, kter� vytvo�ila zlom v tisku pohlednic. Sb�ratelsky se pohlednice rozli�uj� podle ��nru, kter� zobrazuj� /m�stopis, v�le�n�, p��n� svatebn�, kv�tiny, pt�ci, obrazy  atd.<br>
<br>
     Prvn� pohlednice Podiv�na se za�aly vyd�vat ve V�dni, kde byly prvn� fotografick� ateli�ry. Ty tiskly pohledy na zak�zku obchodn�k�, kte��  je z�rove� prod�valy. V Podiv�n� byl prvn�m  fotograf, kter� po��dil sn�mek pro pohlednici  David Konstandt. Bohu�el se nepoda�ilo zjistit, kde m�l ateli�r /ul.Kopce ?/. Fotografoval v l�tech 1890 - 1910. V tomto obdob� do roku 1913 m�l postaven� d�ev�n� ateli�r na ul.Bratislavsk� fotograf Emil �auman /*17.1.1868/. <br>
<br><br>
<div id='pohledVydal'  class='pohledVydal'>
Prvn� podiv�nsk� fotograf David Konstandt 
/zadn� strana fotografie/
<br><br>
</div>
<div id='pohledVydal'  class='pohledVydal'>
<img  src="pohledyAll/konstand.jpg"  width="350" alt="Prvn� podiv�nsk� fotograf David Konstandt " title="Prvn� podiv�nsk� fotograf David Konstandt ">
</div>
&nbsp;
	<br><br><br>

<div id='pohledVydal'  class='pohledVydal'>
Ulice Bratislavsk� � �ipka ukazuje, kde st�val ateli�r Emila �aumana<br>/byla to d�ev�n� stavba/<br><br>
</div>
<img  src="pohledyAll/sauman.jpg"  width="670" alt="Ateli�r Emila �aumana" title="Ateli�r Emila �aumana">
	<br><br><br>

V roce 1913 p�ich�z� do Podiv�na  v�de�sk� fotograf Karel Roedel /*30.5.1880/. Za man�elku si vzal  Annu Svobodovou /*28.8.1883/ v Podiv�n�. Atelier si za��dil na ul.Palack�ho �.p.422/10, kde za�al provozovat fotografickou  �innost. V roce 1927 si postavil na ul. Sokolsk� �.p.508/8 nov� ateli�r, kter� m�l sklen�nou st�echu. Karel Roedel byl v�zna�n� region�ln� fotograf. Ze �irok�ho okol� se zde chodili fotografovat obyvatel� Rakvic, Velk�ch B�lovic, �i�kova, Velk�ch Pavlovic, Bo�etic, Vrbice a Ladn�. V�t�inou to byli svatebn�, hodov�, rodinn� a portr�tn� fotografie. Fotografickou �innost zam��il i na z�b�ry Podiv�na, kter� se vyd�valy na pohlednic�ch. 
<br><br><br><div id='pohledVydal'  class='pohledVydal'>
Atelier Roedel na ul.Palack�ho<br><br>
</div>
<img  src="pohledyAll/RoedelPalackeho.jpg"  width="670" alt="Atelier Roedel na ul.Palack�ho" title="Atelier Roedel na ul.Palack�ho">
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
Atelier Roedel na ul. Sokolsk�<br><br>
</div>
<img  src="pohledyAll/RoedelSokolska.jpg"  width="670" alt="Atelier Roedel na ul. Sokolsk�" title="Atelier Roedel na ul. Sokolsk�">
	<br><br><br>
V roce 1933 provozoval fotografickou �innost i fotograf Balon, kter� m�l atelier ve dvo�e u �t�pin� ul.Havl��kova 532/1. Jeho �innost se zam��ila jen na portr�tn� fotografie. Atelier opustil po roce 1939 a atelier p�evzala fotografka Leopolda �aumanov� /*16.11.1906/, kter� zde provozovala �innost do roku 1945. Vydala n�kolik fotografi� pohlednic /interi�r kostela/.  V roce 1945 dobrovoln� opustil Podiv�n Karel Roedel /n�meck� n�rodnost/ a jeho atelier odkoupila L.�aumanov�.se sv�m synem �estm�rem �aumanem /*9.2.1925/. Atelier na ul. Sokolsk� po roce 1948 byl zest�tn�n a p�e�el pod st�tn� podnik Slu�by m�sta B�eclavi. Provoz ukon�il v roce 1975, kdy byl p�estav�n na mate�skou �kolku. Foto a vyd�van� pohlednic p�e�lo v 60.l�tech na st�tn� podnik ORBIS Praha. Po roce 1991 za�aly vyd�vat pohlednice sv�m n�kladem  podnikatel� /Hotel ARCADE/ a dal�� instituce /farn� kostel v Podiv�n� - far�� Pavel K�iv�/.  V roce 2000 vydal s�rii pohled� Podiv�na ji� v digit�ln� podob� fotograf Ond�ej �apka /*3.2.1975/, kter� m�l ateli�r a prodejnu na ul.Komensk�ho �. 264.
	<br><br><br>
	<div id='pohledVydal'  class='pohledVydal'>
Fotografie ze dvora p.�t�piny, kde b�vala oprav�rensk� d�lna. Vzadu za dvojic� mechanik� je vid�t  st�echa ateli�ru /prosklen� st�e�n� okno/<br><br>
</div>
<img  src="pohledyAll/stepina.jpg"  width="670" alt="Atelier Roedel na ul.Palack�ho" title="Atelier Roedel na ul.Palack�ho">
	<br><br><br>
<div id='pohledVydal'  class='pohledVydal'>
V sedmdes�t�ch l�tech se nedost�valo m�st v mate�sk� �kole /ul. Star�  �tvr�/ D�ti chodily i do t��d na st.radnici, do�lo k rozhodnut� postavit �kolku na ul.Sokolsk� z b�val�ho fotografick�ho ateli�ru.<br><br>
</div>
<img  src="pohledyAll/skolka.jpg"  width="670" alt="Atelier Roedel na ul. Sokolsk�" title="Atelier Roedel na ul. Sokolsk�">
<br><br><hr>
Z�v�rem chci pod�kovat v�em, kte��  poskytli pohlednice k t�to publikaci. Sestaven� t�to publikace trvalo celkem deset let. Poda�ilo se m� z�skat k ofocen� p�es 200 pohlednic. V�m o n�kolika dal��ch /5-10ks/, kter� se nepoda�ilo dohledat. N�m�ty na pohlednic�ch se ve v�t�in� p��pad� opakuj�, tak jsem p�istoupil k popisu pohlednic  ze �koln�ch a m�stsk�ch kronik. <br>
<br>
 Zdenek Hasil�k   r. 2012
<br><br><hr>
<div id="pohledPosun"  class="pohledPosun">
<span class=zacatek><A href="index.php">�vod</A></span> | Historie | <span class=zacatek><A href="001-pohlednice-podivin.php">Pohlednice</A></span>
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->

<div class="pataD">
<br>Copyright - 2013 � Zdenek Hasil�k (�)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
<? include "phpPocitadloP.php" ?></BODY></HTML>



