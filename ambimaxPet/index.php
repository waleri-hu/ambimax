<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/vendor/fortawesome/font-awesome/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/font.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/index.css" media="all" />
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div>
          <div class="float-right">
            <div class="button1">
              <i class="fa fa-user fa-2x"></i>
            </div>
            <div class="button1">
              <div class="rel-point"><div class="portofrei">PORTOFREI</div></div>
              <i class="fa fa-cart-plus fa-2x"></i>
            </div>
          </div>
          <h1>
            petfriends.ch
          </h1>
        </div>
        <div>
          <div class="button1">
            <i class="fa fa-navicon fa-2x"></i> MENÜ
          </div>
          <div class="button1 float-right">
            Gesamten Shop durchsuchern ... <i class="fa fa-search fa-2x"></i>
          </div>
        </div>
        <div class="slider1">
          <div class="items">
            <?php for ($i2 = 1; $i2 <= 30; $i2++): ?>
              <div class="item">
                <div class="item-inner">
                  <div class="image"><img src="/index_files/tiere/katze.png"/></div>
                  <div class="description">
                    KATZE
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>
          <i class="fa fa-arrow-right right button-circle"></i>
          <i class="fa fa-arrow-left left button-circle"></i>
        </div>
      </div>
    </div>
    <div class="container area1 sub-header">
      <div class="float-right"><a>DE</a>|<a>FR</a></div>
      Bestellungen bis 12.00 Uhr, innert 24 Stunden
    </div>
    <div class="container large-links">
      <div><img src="/index_files/large-link.png"/> SALE / DEAL DER WOCHE <i class="fa fa-arrow-right  button-circle"></i></div>
      <div><img src="/index_files/large-link.png"/> MEMBERCARD / RABATTPROGRAM <i class="fa fa-arrow-right  button-circle"></i></div>
      <div><img src="/index_files/large-link.png"/> FILIALEN / SO FINDEN SIE UNS <i class="fa fa-arrow-right  button-circle"></i></div>
      <div><div class="area1 banner"><br><br><br>Aktueller<br>BANNER<br><br><br></div></div>
      <div><img src="/index_files/large-link.png"/>  PETFRIENDS BLOG / TRENDS <i class="fa fa-arrow-right  button-circle"></i></div>
      <div><img src="/index_files/large-link.png"/> FUTTERBERATUNG <i class="fa fa-arrow-right  button-circle"></i></div>
    </div>
    <div class="slider-collection">
      <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="item">
          <div class="container">
            <h2 > <img src="/index_files/star.png"/> TOP SELLER KATZE</h2>
          </div>
          <div class="slider2">
            <?php for ($i2 = 1; $i2 <= 10; $i2++): ?>
              <div class="item">
                <div class="image"><div class="off-label">45%</div></div>
                <div class="description">
                  <i class="fa fa-cart-plus button-circle2 float-right"></i>
                  SWISSPET<br>
                  DESCRIPTION 1<br>
                  DESCRIPTION 2<br>
                  <br>
                  <div class="price">
                    <div>
                      <div class="price-old">CHF 22.00</div>
                      <div class="price-new">CHF 22.00</div>
                    </div>
                    <div>
                      <div class="price-label">Ab:</div>
                      <div class="price-default">CHF 22.00</div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      <?php endfor; ?>
    </div>
    <div class="container">
      <h2>TIERBEDARF UND TIERFUTTER EINFACH BESTELLEN IM PETFRIENDS ONLINESHOP</h2>
      <p>Haustiere machen das Leben schöner, denn sie sorgen für Spiel, Spass und Entspannung. Damit es Ihren behaarten oder gefiederten Lieblingen aber auch wirklich an nichts fehlt, benötigen Sie nicht nur das passende Tierfutter und Zubehör. Ratgeber zu Haustieren sollten insbesondere vor der Anschaffung eines Tieres in keinem Haushalt fehlen. Aber auch erfahrene Tierhalter können durch die anschaulich gestalteten Fachbücher dazu beitragen, Hund, Katze oder Kaninchen das Leben noch angenehmer, gesünder und artgerechter zu gestalten.</p>
    </div>
    <div class="container area2">
      <img src="index_files/YouTube-Filled-100.png"/>
      <img src="index_files/Instagram-100.png"/>
      <img src="index_files/Facebook-100.png"/>
      <img src="index_files/petfriends.png"/>
    </div>
    <div class="container area1">
      <div class="footer">
        <div class="block block-subscribe links">
          <div class="block-title">
            <strong><span>Newsletter</span></strong>
          </div>
          <form action="https://www.petfriends.ch/de/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
            <input name="email" id="newsletter" title="Anmeldung für unseren Newsletter" class="newsletter" type="text">
            <button type="submit" title="Abonnieren" class="button2"><span><span>Abonnieren</span></span></button>
          </form>
        </div>
        <div class="links">
          <div class="block-title"><strong><span>Petfriends AG</span></strong></div>
          <ul>
            <li><a href="https://www.petfriends.ch/de/ueber-uns">Über uns</a></li>
            <li><a href="https://www.petfriends.ch/de/filialen">Filialen</a></li>
            <li><a href="https://www.petfriends.ch/de/kontakt">Kontakt</a></li>
            <li><a href="https://www.petfriends.ch/de/versand">Versand und Zahlung</a></li>
            <li><a href="https://www.petfriends.ch/de/retouren">Retouren</a></li>
          </ul>
        </div><div class="links">
          <div class="block-title"><strong><span>Service</span></strong></div>
          <ul>
            <li><a href="https://www.petfriends.ch/de/member">Werden Sie Member</a></li>
            <li><a href="https://www.petfriends.ch/de/jobs">Jobs</a></li>
            <li><a href="https://www.petfriends.ch/de/impressum">Impressum</a></li>
            <li><a href="https://www.petfriends.ch/de/agb">AGB</a></li>
            <li><a href="https://www.petfriends.ch/de/datenschutz">Datenschutz</a></li>
            <li><a href="https://www.petfriends.ch/de/mobile-bookmark">Petfriends App</a></li>
          </ul>
        </div><div class="links">
          <div class="block-title"><strong><span>Konto</span></strong></div>
          <ul>
            <li><a href="https://www.petfriends.ch/de/customer/account">Mein Benutzerkonto</a></li>
            <li><a href="https://www.petfriends.ch/de/sales/order/history">Bestellungen</a></li>
            <li><a href="https://www.petfriends.ch/de/customer/account">Registrieren</a></li>
          </ul>
        </div><div class="links">
          <div class="block-title"><strong><span>Zahlungsmethoden</span></strong></div>
          <img alt="" src="index_files/zahlungsmethoden.png">
        </div>       
      </div>
    </div>
  </body>
</html>
