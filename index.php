<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" >
  <meta name="description" content="OPIS" >
  <meta name="keywords" content="TAGI" >
  <meta name="author" content="Tymoteusz Kulpa" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css" />

  <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
  <script src="assets/js/classie/classie.js"></script>

</head>
<body>
  <!-- Nawigacja --->
  <header>
    <div class="container">
      <span class="logo">
        <a href="http://www.ogrodyaurora.pl/"><img src="assets/img/####" alt="Ogrody Aurora"></a>
      </span>
      <nav>
        <ul>
          <li><a href="#showcase">Home</a></li>
          <li><a href="#oferta">Oferta</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <script type="text/javascript">

  function init() {
      window.addEventListener('scroll', function(e){
          var distanceY = window.pageYOffset || document.documentElement.scrollTop,
              shrinkOn = 20,
              header = document.querySelector("header");
          if (distanceY > shrinkOn) {
              classie.add(header,"smaller");
          } else {
              if (classie.has(header,"smaller")) {
                  classie.remove(header,"smaller");
              }
          }
      });
  }

  window.onload = init();

  </script>

  <div id="navresp">
      <span class="logo">
        <a href="http://www.ogrodyaurora.pl/"><img src="assets/img/####" alt="Ogrody Aurora"></a>
      </span>

      <div id="burger">
        <div id="nav-icon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
  </div>

  <div id="burgermenu">
    <ul>
      <li><a href="#showcase">Home</a></li>
      <li><a href="#oferta">Oferta</a></li>
      <li><a href="#kontakt">Kontakt</a></li>
    </ul>
  </div>

  <script type="text/javascript">

    $(document).ready(function(){
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
      if (this.classList.contains("open")) {
        document.getElementById("burgermenu").style.display = "block";
        document.getElementById("burgermenu").style.animationName = "menuopen";
        $('body').addClass("overflowHidden");
        $('#showcase, #oferta, #break1, #kontakt, #break2, footer').addClass("blur");
      }else {
        document.getElementById("burgermenu").style.animationName = "menuclose";
        $('body').removeClass("overflowHidden");
        $('#showcase, #oferta, #break1, #kontakt, #break2, footer').removeClass("blur");
        setTimeout(function(){ document.getElementById("burgermenu").style.display = "none"; }, 600);
      }
    });
    });

    const navIconClasses = document.getElementById("nav-icon").classList;

  /*  $(document).click(function(event) {
    if(!$(event.target).closest('#burgermenu').length) {
        if(navIconClasses.contains("open")) {
          document.getElementById("burgermenu").style.animationName = "menuclose";
          $('body').removeClass("overflowHidden");
          $('.content').removeClass("blur");
          setTimeout(function(){ document.getElementById("burgermenu").style.display = "none"; }, 600);
      }
    })*/

    $("#burgermenu").on("click", "li", function () {
        navIconClasses.remove('open')
        document.getElementById("burgermenu").style.animationName = "menuclose";
        $('body').removeClass("overflowHidden");
        $('#showcase, #oferta, #break1, #kontakt, #break2, footer').removeClass("blur");
        setTimeout(function(){ document.getElementById("burgermenu").style.display = "none"; }, 600);
    });

    </script>

<!-- Zawartość --->
<section id="showcase">
  <div class="container">
    <h1>Witamy w Ogrody Aurora</h1>
    <div id="tekst">
      Zajmujemy się profesjonalną aranżacją, projektowaniem<br>
      oraz zakładaniem ogrodów
    </div>
    <a href="#oferta" id="cta" class="b1" >
      Sprawdź nas
    </a>
  </div>
</section>
<section id="oferta">
  <div class="container">
    <h2>Ogrody<br><span>Aurora</span></h2>
    <div id="tworzenie" class="c1">
      <h3>Tworzenie</h3><br>
      <ul>
        <li>Projektowanie oraz zakładanie ogrodów od podstaw</li><br>
        <li>Konstrukcje drewniane</li><br>
        <li>Zakładanie trawników</li><br>
        <li>Systemy automatycznego nawadniania</li><br>
        <li>Automaty koszące</li><br>
      </ul>
    </div>
    <div id="kosmetyka" class="c1">
      <h3>Kosmetyka</h3><br>
      <ul>
        <li>Aranżacja zieleni</li><br>
        <li>Oświetlenie ogrodów</li><br>
        <li>Cięcie i formowanie roślin</li><br>
        <li>Pielęgnacja ogrodów</li><br>
        <li>Kompleksowa kosmetyka trawników:koszenie, wertykulacja, nawożenie</li><br>
      </ul>
    </div>
    <div id="opieka" class="c1">
      <h3>Opieka</h3><br>
      <ul>
        <li>Renowacja</li><br>
        <li>Pielęgnacja drzew i krzewów</li><br>
        <li>Utrzymanie terenów zielonych oraz parkingów</li><br>
        <li>Wywóz liści</li><br>
        <li>Gospodarowanie skwerów</li><br>
        <li>Karczowanie</li><br>
      </ul>
    </div>
  </div>
</section>

  <section id="break1">
    <!-- IMG#1 --->
  </section>

<section id="kontakt">
  <div class="container">
    <div id="leftalign">
    <div id="map">
      <script>
        function initMap() {
          var uluru = {lat: 50.03738389999999, lng: 20.95694400000002};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
          var infowindow = new google.maps.InfoWindow({
		          content:'<strong>Ogrody Aurora</strong><br>Niedomicka 5, 33-100 Tarnów<br>'
	           });
          google.maps.event.addListener(marker, 'click', function(){
   		       infowindow.open(map,marker);
   	       });
   	      infowindow.open(map,marker);
        }
      </script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQZTZ1PsRVUBV7oIqmpWtUvUi3zvWgDVA&callback=initMap">
      </script>
    </div>
    <div id="creds">
      ogrodyaurora@op.pl<br>
      +48 690 027 755<br>
    </div>
    </div>
    <div id="rightalign">


    <div id="godziny">
      <h3>Godziny otwarcia:</h3>
      poniedziałek:	  07:00 - 18:00<br>
      wtorek:			    07:00 - 18:00<br>
      środa:			    07:00 - 18:00<br>
      czwartek:		    07:00 - 18:00<br>
      piątek:			    07:00 - 18:00<br>
      sobota:			    ZAMKNIĘTE<br>
      niedziela:	   	ZAMKNIĘTE<br>
    </div>
    <div id="form1">
      <form class="formularz" action="mailto:tymi223@gmail.com" method="post" enctype="text/plain">
        <fieldset>
          <input type="textbox" name="imie+nazwisko" value="Imię i nazwisko" onfocus="if (this.value=='Imię i nazwisko') this.value='';" onblur="if (this.value=='') this.value='Imię i nazwisko';"/><br>
          <input type="textbox" name="email" value="E-mail" onfocus="if (this.value=='E-mail') this.value='';" onblur="if (this.value=='') this.value='E-mail';"/><br>
        </fieldset>
        <input type="textbox" name="tresc" value="Treść" onfocus="if (this.value=='Treść') this.value='';" onblur="if (this.value=='') this.value='Treść';"/><br>
        <button class="b1" type="submit">WYŚLIJ</button>
      </form>
    </div>
    </div>

  </div>
</section>

  <section id="break2">
    <!-- IMG#2 --->
  </section>

<!-- Stopka --->
    <footer>
      OGRODY AURORA 2013-<script>document.write(new Date().getFullYear())</script>&reg; <br>
      <span>DESIGN &amp; CODE: <a href="https://www.google.com/">Tymoteusz 'nyiss' Kulpa</a></span>
    </footer>

  <script>

    var offset;

    if (window.innerWidth > 975) {
      offset = 72;
    }else {
      offset = 65;
    }

    $('a').click(function(event) {
        var id = $(this).attr("href");
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 500);
        event.preventDefault();
    });

  </script>

</body>
</html>
