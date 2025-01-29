<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<META content=cs http-equiv=Content-Language>
<META content='text/html; charset=windows-1250' http-equiv=Content-Type>
<meta name='robots' content='all,follow'>
<meta http-equiv='Content-Script-Type' content='text/javascript'>
<meta name='description' content='Staré pohlednice Podivína'>
<META name='keywords' content='pohlednice, sbírka, podivín'>
<meta http-equiv='Content-Style-Type' content='text/css'>
<link rel='stylesheet' type='text/css' href='cssPohlednice.css'>
<title>Hledáme pohlednice Podivína</title>
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
                    window.location.href = '197-pohlednice-repolero-9-podivin-namesti.php'; // Navigate to the previous page
                } else if (event.key === 'ArrowRight') {
                    window.location.href = '197-pohlednice-repolero-9-podivin-namesti.php'; // Navigate to the next page
                }
            });

            // Add tooltips to the links
            var links = document.getElementsByTagName('a');
            for (var i = 0; i < links.length; i++) {
                if (links[i].getAttribute('href') === '197-pohlednice-repolero-9-podivin-namesti.php') {
                    links[i].setAttribute('title', 'Šipka vlevo');
                } else if (links[i].getAttribute('href') === '197-pohlednice-repolero-9-podivin-namesti.php') {
                    links[i].setAttribute('title', 'Šipka vpravo');
                }
            }

            // Add swipe event listeners for mobile devices
            var touchstartX = 0;
            var touchendX = 0;

            function handleGesture() {
                if (touchendX < touchstartX) {
                    window.location.href = '197-pohlednice-repolero-9-podivin-namesti.php'; // Swipe left to navigate to the next page
                }
                if (touchendX > touchstartX) {
                    window.location.href = '197-pohlednice-repolero-9-podivin-namesti.php'; // Swipe right to navigate to the previous page
                }
            }

            document.addEventListener('touchstart', function(event) {
                touchstartX = event.changedTouches[0].screenX;
            });

            document.addEventListener('touchend', function(event) {
                touchendX = event.changedTouches[0].screenX;
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
<? $p198="<img src='pm/novaX.gif' width='81' height='52' border='2' vspace='1' hspace='1' alt='tento' title=''>"; ?>
<? include "phpLevyP6.php" ?>
<div id='text1'  class='text1'>
<h1>Historické pohlednice Podivína</h1>
<div id='pohledNazev'  class='pohledNazev'>
	<span class=s2>Hledáme další pohlednice Podivína</span><br><br>
	<span class=s3></span>
</div>


	<br>	
<div id='pohledVydal'  class='pohledVydal'>

<hr></div>
Rádi bychom zde měli všechny pohlednice Podivína, které kdy byly vydány. <br>
Máte doma nějakou pohlednici Podivína, která není na těchto stránkách uvedena?<br>Pokud byste nám mohli poslat tuto pohlednici neskenovanou nebo ofotografovanou, velmi by nás to potěšilo!<br><br>Děkujeme! <br><br>
Zdenek Hasilík (†)<br><br>
<div id='pohledVydal'  class='pohledVydal'>
<br><br><br><br><br><br><br><br><br><br><br>
<hr>
<div id='pohledPosun'  class='pohledPosun'>
<span class=zacatek><A href='index.php'>Úvod</A></span> |<A href='000-strucna-historie-pohlednic-podivina.php'>Historie</A></span> | <span class=zacatek></span><span class=zacatek><A href='197-pohlednice-repolero-9-podivin-namesti.php'>předchozí</A></span>  198/198
</div>
<br><br><br>
</div><!--konec text1-->
</div><!--konec obsah-->
<div class='pata'>

</div><!--konec pata-->
<div class='pataD'>
<br>Copyright - 2013 © Zdenek Hasilík (†)<br>Webmaster: Radek Kocourek<img  src="mailR.png"  width="198" alt="mail" title="mail"><br><br>
</div><!--konec pataD-->
</div><!--konec hlavaindex-->
</BODY></HTML>



