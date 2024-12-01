<?php
include('counts.php');
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("Location: login.php");  // Redirect to login page if not logged in
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-adsense-account" content="ca-pub-4139230376026860">

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/logo1.jpg" type="image/x-icon" />

  <!--=============== REMIX ICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Jifunze Coding</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="index.php" class="nav__logo"> <img src="assets/img/logo1.jpg">
        <h1>Variable X</h1>
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="index.php" class="nav__link active-link">Mwanzo</a>
          </li>

          <!-- <li class="nav__item">
                    <a href="index.php#about" class="nav__link">Kutuhusu</a>
                </li> -->

          <li class="nav__item">
            <a href="utangulizi.html" class="nav__link">Utangulizi</a>
          </li>
          <li class="nav__item">
            <a href="css.php" class="nav__link">CSS</a>
          </li>

          <!-- <li class="nav__item">
            <a href="python.php" class="nav__link">Python</a>
          </li> -->

          <li class="nav__item">
            <a href="notification.php" class="nav__link notification-bell <?php if ($notificationcount > 0) echo 'new-notification'; ?>">
              <i class="ri-notification-3-line"></i>
              <?php if ($notificationcount > 0): ?>
                <span class="notification-dot"></span>
              <?php endif; ?>
            </a>
          </li>


          <li class="nav__item">
            <a href="logout.php" class="nav__link" id="logout">Toka</a>
          </li>

        </ul>

        <!-- Close button -->
        <div class="nav__close" id="nav-close">
          <i class="ri-close-large-line"></i>
        </div>

        <div class="nav__social">
          <a
            href="https://www.facebook.com/"
            target="_blank"
            class="nav__social-link">
            <i class="ri-facebook-circle-line"></i>
          </a>

          <a
            href="https://www.instagram.com/codewithvariablex/"
            target="_blank"
            class="nav__social-link">
            <i class="ri-instagram-line"></i>
          </a>

          <a
            href="https://twitter.com/"
            target="_blank"
            class="nav__social-link">
            <i class="ri-twitter-x-line"></i>
          </a>
        </div>
      </div>

      <div class="nav__toggle" id="nav-toggle">
        <i class="ri-apps-2-line"></i>
      </div>
    </nav>

    <!-- New horizontal scroll menu -->
    <nav class="bottom-nav">
      <ul class="bottom-nav__list">
        <li><a href="#" class="bottom-nav__link">Miongozo</a></li>
        <li><a href="#somo1" class="bottom-nav__link">Somo la 1</a></li>
        <li><a href="#somo2" class="bottom-nav__link">Somo la 2</a></li>
        <li><a href="#somo3" class="bottom-nav__link">Somo la 3</a></li>
        <li><a href="#somo4" class="bottom-nav__link">Somo la 4</a></li>
        <li><a href="#somo5" class="bottom-nav__link">Somo la 5</a></li>
        <li><a href="#somo6" class="bottom-nav__link">Somo la 6</a></li>
        <li><a href="#somo7" class="bottom-nav__link">Somo la 7</a></li>
        <li><a href="#somo8" class="bottom-nav__link">Somo la 8</a></li>
        <li><a href="#somo9" class="bottom-nav__link">Somo la 9</a></li>
      </ul>
    </nav>
  </header>
  <!--==================== MAIN ====================-->

  <main class="main">
    <div class="table-of-content">
      <img src="assets/img/htmlbanner.png" alt="The image for table of content" id="banner">
    </div>
    <div class="kazi"><br><br>
      <h2>Ramani ya HTML</h2><br>
      <img src="assets/img/Roadmap.png">
    </div>
    <!--==================== HOME ====================-->
    <section class="intro section" id="html-intro">
      <h2 class="section__title" id="miongozo">Miongozo</h2>
      <div class="kazi">
        <img src="assets/img/scr-1.png">
      </div>

    </section>
    <!--==================== Somo la 1 ====================-->
    <section class="somo1 section" id="somo1">
      <h3 class="ukurasa">1</h3>
      <h2 class="section__title">Somo la 1</h2>
      <h4 class="subsection__title">Utangulizi wa HTML</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza ukurasa wako binafsi ambapo
          umeandikwa kwa kutumia html.<br> Pia utaelewa maana ya mambo yafuatayo:
        </p>
        <li>Html</li><br>
        <li>Tags</li>

      </div>
      <h2 class="kichwakidogo">Html ni nini?</h2>

      <div class="mafasirio">

        <li> Html ni ufupisho wa HyperText Markup Language</li>
        <li> Ni lugha inayotumiwa kuandika kurasa za tovuti</li>

      </div>

      <h2 class="kichwakidogo">Tag ni nini?</h2>
      <p>Tag ni alama inayohusisha jambo lolote ambalo unataka kuweka kwenye kurasa. Kwa mfano Tunajuwa fungu ni Paragraph,
        kwa hiyo tag yake itakuwa <span>&ltp&gt </span>...<span>&lt/p&gt </span>. Tags nyingi zina kufungua na kufunga.
        Lakini si zote zinazofanya kazi kwa njia hiyo!</p>
      <div class="mafasirio">

        <li><span>&lt;!DOCTYPE html&gt;</span><br></li>
        <li><span>&lthtml&gt </span>...<span>&lt/html&gt </span><br></li>
        <li><span>&lthead&gt </span>...<span>&lt/head&gt </span><br></li>
        <li><span>&lttitle&gt</span>...<span>&lt/title&gt </span><br></li>
        <li><span>&ltbody&gt </span>...<span>&lt/body&gt </span><br></li>

        <h2 class="kichwakidogo">Muundo wa Msingi wa HTML:</h2>


        <li><span>&lt;!DOCTYPE html&gt;</span>
          : Ni ishara inayotumiwa kuonyesha aina ya hati (document type)</li>
        <li> <span>&lthtml&gt: </span>Ni mwanzo wa document </li>
        <li> <span>&lthead&gt: </span>Inahusisha mambo yote ambayo document hiyo itatumia na kuhitahitaji </li>
        <li> <span>&lttitle&gt:</span> Inaonyesha kichwa cha hiyo document </li>
        <li> <span>&ltbody&gt: </span> Ndani ya "body" ni hapo kila kitu ambacho ungependa kuweka kwenye document kinakwenda.<br>
          ( Mfano: Kifungu, picha, vichwa vya habari, video, viunganishi etc... ) </li>

      </div>

      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 1.png">
      </div>
      <h2 class="video">Video</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/r7YFiEp6xIA?si=bQzWnWoqb5mKXwGY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <h2 class="video">Tumia Uliyojifunza</h2><br>
      <div class="kazi">
        <img src="assets/img/scr-2.png">
      </div>

    </section>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4139230376026860"
      crossorigin="anonymous"></script>
    <!--==================== Somo la 2 ====================-->
    <section class="somo2 section" id="somo2">
      <h3 class="ukurasa">2</h3>
      <h2 class="section__title">Somo la 2</h2>
      <h4 class="subsection__title"> Tags na Elements za Msingi </h4>
      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza ukurasa wako binafsi ambapo
          umeandikwa kwa kutumia html.<br> Pia utaelewa maana ya mambo yafuatayo:
        </p>
        <li>&lth1&gt</li><br>
        <li>&lth2&gt</li><br>
        <li>&lth3&gt</li><br>
        <li>&lth4&gt</li><br>
        <li>&lth5&gt</li><br>
        <li>&lth6&gt</li><br>


        <li>&ltp&gt</li><br>

      </div>
      <h2 class="kichwakidogo">Vichwa (Headings)</h2>

      <div class="mafasirio">

        <li><strong>&lth1&gt hadi &lth6&gt</strong>: Hizo tags zinafafanua vichwa. h1 ikiwa kichwa kikubwa na h6 ikiwakilisha kichwa kidogo kabisa!</li>
        <p>Unaweza kutumia hizo tags kuandika hati ama documents ambayo itahusisha vichwa vikubwa na vidogo kwa kutumia html.</p>
        <h2 class="kichwakidogo">Kifungu (Paragraph)</h2>
        <li><strong>&ltp&gt</strong>: tag hii inafafanua kifungu </li>
        <p>Kila mara unapoandika vifungu utahitaji kufunga tag hiyo ya &ltp&gt</p>
        <p>Unaweza kuendelea kufungua na kufunga mafungu yako,<br>
          na hiyo itakusaidia kuandika mafungu mengi karidi uwezavyo.
        <p>
          <strong>Mfano:</strong> &ltp&gt fungu &lt/p&gt
        </p>

      </div>

      <h2 class="kichwakidogo">Code</h2>

      <div class="mwonekano">
        <img src="assets/img/image 2.png"><br>
        <p>Si kila mtu ambaye ni mpenzi wa kusoma. Ndiyo sababu nimetengeneza video ifuatayo!</p>
        <p>Ikiwa tayari umesoma hapo juu na umeelewa kwa kina mafasirio hayo, si lazima kutazama video hii.
          Lakini ukitaka kupanua zaidi ujuzi wako, na labda hukuelewa vizuri zaidi unaweza kuitazama video hapo chini!</p>
      </div>
      </div>

      <h2 class="video">Video</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/PIn4ayaBNVg?si=qTgGpDVbjO-60eSB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

      <div class="kazi">
        <img src="assets/img/scr-3.png">
      </div>
    </section>

    <!--==================== Somo la 3 ====================-->
    <section class="somo3 section" id="somo3">
      <h3 class="ukurasa">3</h3>
      <h2 class="section__title">Somo la 3</h2>
      <h4 class="subsection__title">Kugeuza Mwonekano wa Maandishi (Formatting Text)</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza ukurasa wako binafsi ambapo
          umeandikwa kwa kutumia html.<br> Pia utaelewa maana ya mambo yafuatayo:
        </p>
        <li>&ltstrong&gt</li><br>
        <li>&ltb&gt</li><br>
        <li>&lti&gt</li><br>
        <li>&ltem&gt</li><br>


      </div>
      <h2 class="kichwakidogo">Bold na Italic</h2>
      <div class="mafasirio">

        <li><strong>&ltb&gt au &ltstrong&gt</strong>: Inafanya maandishi kuwa na wino mzito</li>
        <p>Wakati fulani inabidi tukazie neno fulani wakati tunaandika barua au documents fulani<br>
          na tunafanya hivyo kwa kutumiawino mzito. Huo ndio wakati unaofaa zaidi wa kutumia tag ya "bold" au "strong" ili <br>
          kukazia jambo hilo kuu kwa kutumia html. Mara kwa mara utajipata umeitumia tag hiyo ili kuwafanya watu waelewe zaidi kile unachotaka waelewe. </p>

        <li><strong>&lti&gt au &ltem&gt</strong> : Inafanya maandishi kuwa italic au kama inayoegemea upande wa kulia</li>
        <p>Njia nyingine tunayotumia kuhakikisha tunakazia jambo kuu kwenye document yetu, ni kwa kufanya <br>
          Maandishi yawe kama yanalala, au italic. Tunafanya hivyo tunapotumia tag ya "I" au "em" tunapoandika html.</p>
        <p> Picha ifuatayo itakusaidia kuelewa kile ninachomaanisha!</p><br>

      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 3.png">

        <p>Si kila mtu ambaye ni mpenzi wa kusoma. Ndiyo sababu nimetengeneza video ifuatayo!</p><br>
        <p>Ikiwa tayari umesoma hapo juu na umeelewa kwa kina mafasirio hayo, si lazima kutazama video hii.
          Lakini ukitaka kupanua zaidi ujuzi wako, na labda hukuelewa vizuri zaidi unaweza kuitazama video hapo chini!</p>
      </div>
      <h2 class="video">Video</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Myyh6bFxpwQ?si=b4ROJ9v-Y4e0Cyug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <h2 class="video">Tumia Uliyojifunza</h2><br>
      <div class="kazi">
        <img src="assets/img/kazi-3.png">
      </div>

    </section>

    <!--==================== Somo la 4 ====================-->
    <section class="somo4 section" id="somo4">
      <h3 class="ukurasa">4</h3>
      <h2 class="section__title">Somo la 4</h2>
      <h4 class="subsection__title">Orodha (List)</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza ukurasa wako binafsi ambapo
          umeandikwa kwa kutumia html.<br> Pia utaelewa maana ya mambo yafuatayo:
        </p>
        <li>&ltul&gt</li><br>
        <li>&ltol&gt</li><br>
        <li>&ltli&gt</li><br>
      </div>

      <h2 class="kichwakidogo">Unordered List:</h2>
      <div class="mafasirio">
        <p>Pindi fulani tunapoandika documents tunafikia kipindi ambacho tutaweka orodha ya mambo fulani.<br>
          Kwa mfano tuna project au mradi wa kujenga nyumba, hatuwezi tu kwenda sokoni na kununua vifaa bila kujuwa gharama si ndiyo?<br>
          Itabidi tutue na tuandike majina ya vitu vyote tutakacyohitaji ili kuanza mradi huo ifaavyo.</p>

        <p>kwa hiyo tuseme ni wewe uliyepewa daraka hilo la kuorodhesha mambo yatakayohitajiwa. Ni hapo ndipo utahitaji kutumia "ul".<br>
          Tag ya "ul" inatumiwa sana kwenye html kuandika orodha au list ya mambo. Kwenye html inaandikwa ufuatavyo: </p>

        <li> <span>&ltul&gt</span>: Huunda orodha isiyopangwa kwa namba.</li>
        <p>Unapotumia tag hii ya "ul" orodha yako itakuwa na nukta kabla ya kila neno unaloandika kama orodha</p>
        <li> <span>&ltli&gt</span>: Inafafanua orodha au (list)</li>
        <p>Lakini html inaomba utumie "li" ku andika mambo yaliyo kwenye orodha.<br>
          Ikimaanisha kwamba "ul" ni nyumba ya oroda yako, alafu "li" ni kila mstari</p>
      </div>
      <h2 class="kichwakidogo">Ordered List:</h2>
      <div class="mafasirio">

        <li><span>&ltol&gt</span>: Huunda orodha iliyopangwa kwa namba. Mfano(1 kisha sentensi, 2 kisha sentensi, etc)</li>
        <p>Unapotumia tag hii ya "ul" orodha yako itakuwa na namba kabla ya kila neno unaloandika kama orodha</p>
        <li><span>&ltli&gt</span>: Inafafanua orodha au (list)</li>
        <p>Lakini html inaomba utumie "li" ku andika mambo yaliyo kwenye orodha.<br>
          Ikimaanisha kwamba "ul" ni nyumba ya oroda yako, alafu "li" ni kila mstari</p>

      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 4.png">
      </div>

      <h2 class="video">Video</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/CsdfOC_bfpU" title="Jifunze Coding | Somo la 4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <h2 class="video">Tumia Uliyojifunza</h2><br>
      <div class="kazi">
        <img src="assets/img/kazi4.png">
        <h2 class="kichwakidogo">Mfano wa Ninachokitafuta</h2>
        <img src="assets/img/kazi-4.png">
      </div>

    </section>

    <!--==================== Somo la 5 ====================-->
    <section class="somo5 section" id="somo5">
      <h3 class="ukurasa">5</h3>
      <h2 class="section__title">Somo la 5</h2>
      <h4 class="subsection__title">Viunganishi (Links)</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza ukurasa wako binafsi unaohusisha
          viunganishi au links. Utajifunza haya yote kwa kutumia lugha iliyoandikwa html.<br> Yafuatayo ni mambo utakayojifunza:
        </p>
        <li>&lta&gt</li><br>
        <li>target</li>
        <ul>
          <li>_self</li>
          <li>_blank</li>
        </ul>
        <li>download</li><br>
        <li>hreflang</li><br>
      </div>

      <h2 class="kichwakidogo">Kuunda viunganishi</h2>

      <div class="mafasirio">
        <li><span>&lta href</span>="https//www.example.com"<span>&gt</span> Jina ya Link <span>&lta&gt</span> : hii inatengeneza kiunganishi kinachoitwa Hyperlink</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 5.png">
      </div>

      <h2 class="kichwakidogo">Target</h2>

      <div class="mafasirio">
        <li><span>target="_self"</span><span>&gt</span> Jina ya Link <span>&lta&gt</span> : hii inafungua link kwenye page hiyohiyo</li>
        <li><span>target="_blank"</span><span>&gt</span> Jina ya Link <span>&lta&gt</span> : hii inafungua window/tab mpya</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/scr-5.png">
      </div>
      <h2 class="kichwakidogo">Download (Kupakuwa)</h2>
      <div class="mafasirio">
        <li><span>&lta href</span>="/path/to/file.zip"<span> download&gt</span> Download File <span>&lta&gt</span> : hii inasaidia kupakua hati au document</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/scr-6.png">
      </div>

      <h2 class="kichwakidogo">hreflang</h2>
      <div class="mafasirio">
        <li><span>&lta href</span>="/path/to/file.zip"<span>hreflang="SW"&gt</span> Tembelea <span>&lta&gt</span> : hii inaonyesha lugha ya hati iliyounganishwa.</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/scr-7.png">
      </div>

      <!-- <h2 class="video">Video</h2>
             <div class="kazi">
              <img src="assets/img/kazi.png"> -->
    </section>

    <!--==================== Somo la 6 ====================-->
    <section class="somo6 section" id="somo6">
      <h3 class="ukurasa">6</h3>
      <h2 class="section__title">Somo la 6</h2>
      <h4 class="subsection__title">Picha</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kuweka Picha kwenye
          Tovuti yako kwa kutumia lugha iliyoandikwa kwa html.<br> Yafuatayo ni mambo utakayojifunza:
        </p>
        <li>&ltimg&gt</li><br>
        <li>alt</li>

      </div>

      <h2 class="kichwakidogo">kuweka Picha</h2>
      <div class="mafasirio">
        <li> <span>&ltimg src="image.jpg" alt="maelezo"&gt</span>: hii inaweka Picha kwenye kurasa,<br>
          lakini usisahau kwamba "alt" inasaidia kujuwa Picha linausisha nini!</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 6.png">
      </div>

      <!-- <h2 class="video">Video</h2>
             <div class="kazi">
              <img src="assets/img/kazi.png"> -->
    </section>


    <!--==================== Somo la 7 ====================-->
    <section class="somo7 section" id="somo7">
      <h3 class="ukurasa">7</h3>
      <h2 class="section__title">Somo la 7</h2>
      <h4 class="subsection__title">Majedwali (Tables)</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza
          Majedwali au tables. Utajifunza haya yote kwa kutumia lugha iliyoandikwa html.<br> Yafuatayo ni mambo utakayojifunza:
        </p>
        <li>&lttable&gt</li><br>
        <li>&lttr&gt</li><br>
        <li>&ltth&gt</li><br>
        <li>&lttd&gt</li><br>
      </div>
      <h2 class="kichwakidogo">kuunda Majedwali (Creating Tables)</h2>
      <div class="mafasirio">
        <li> <span>&lttable&gt</span>: hii inatengeneza table</li>
        <li> <span>&lttr&gt</span>: hii inatengeneza mahali data yako itawekwa (table row)</li>
        <li> <span>&lttd&gt</span>: hii inamaanisha data utakayoweka kwenye Table</li>
        <li> <span>&ltth&gt</span>: hii inasimamia kichwa cha kila mstari wa data</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 7.png">
      </div>
      <!-- <h2 class="video">Video</h2>
             <div class="kazi">
              <img src="assets/img/kazi.png"> -->
    </section>


    <!--==================== Somo la 8 ====================-->
    <section class="somo8 section" id="somo8">
      <h3 class="ukurasa">8</h3>
      <h2 class="section__title">Somo la 8</h2>
      <h4 class="subsection__title">Fomu (Forms)</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza ukurasa wako binafsi na utajuwa jinsi ya kuunda
          fomu au forms. Utajifunza haya yote kwa kutumia lugha iliyoandikwa html. Yafuatayo ni mambo utakayojifunza:
        </p>
        <li>&ltform&gt</li><br>
        <li>&ltinput&gt</li><br>
        <li>&ltlabel&gt</li><br>
      </div>

      <h2 class="kichwakidogo">kutengeneza Fomu (Creating Forms)</h2>
      <div class="mafasirio">
        <li><span>&ltform&gt</span>: hii inatengeneza Fomu</li>
        <li><span>&ltinput&gt</span>: hii inatengeneza mahali mteja au aliyetembelea tovuti yako ataweka maelezo</li>
        <li><span>&ltlabel&gt</span>: hii inasaidia kujuwa unaombwa kujaza nini</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 8.png">
      </div>

      <!-- <h2 class="video">Video</h2>
             <div class="kazi">
              <img src="assets/img/kazi.png"> -->
    </section>

    <!--==================== Somo la 9 ====================-->
    <section class="somo9 section" id="somo9">
      <h3 class="ukurasa">9</h3>
      <h2 class="section__title">Somo la 9</h2>
      <h4 class="subsection__title">Divs na Spans</h4>

      <div class="objective">
        <h2>Lengo la Somo hili</h2>
        <p class="objectif">Baada ya somo hili utakuwa na uwezo wa kutengeneza divs au visehemu kwenye ukurasa wako. Utajifunza haya yote kwa kutumia lugha iliyoandikwa html. Yafuatayo ni mambo utakayojifunza:
        </p>
        <li>&ltdiv&gt</li><br>
        <li>&ltspan&gt</li><br>
      </div>

      <h2 class="kichwakidogo">kukusanya mambo Pamoja</h2>
      <div class="mafasirio">
        <li><span>&ltdiv&gt</span>: Inafafanua mgawanyiko au sehemu.</li>
        <li><span>&ltspan&gt</span>: Inafafanua sehemu katika hati au kwenye Document</li>
      </div>
      <h2 class="kichwakidogo">Code</h2>
      <div class="mwonekano">
        <img src="assets/img/image 9.png">
      </div>

      <!-- <h2 class="video">Video</h2>
             <div class="kazi">
              <img src="assets/img/kazi.png"> -->
    </section>
    </div>

    <script>
      function changeFontSize(action) {
        const content = document.querySelector('.content');
        const currentFontSize = window.getComputedStyle(content, null).getPropertyValue('font-size');
        const newSize = action === 'increase' ? parseInt(currentFontSize) + 2 : parseInt(currentFontSize) - 2;
        content.style.fontSize = `${newSize}px`;
      }
    </script>
    <!--==================== Somo la 10 ====================-->
    <section class="somo10 section" id="mambomakuu">
      <h3 class="ukurasa">10</h3>
      <h2 class="section__title">Mambo Makuu</h2>
      <h4 class="subsection__title">Mambo Makuu na Muhimu Kuhusu Html</h4>


      <h2 class="kichwakidogo">Muhtasari</h2>
      <div class="mafasirio">
        <li> <span>&lt;!DOCTYPE html&gt;</span>
          : Ni ishara inayotumiwa kuonyesha aina ya hati (document type)</li>
        <li> <span>&lt;html&gt;</span>
          : Ni mwanzo wa document </li>
        <li> <span>&lt;head&gt;</span>
          : Inahusisha mambo yote ambayo document hiyo itatumia na kuhitahitaji </li>
        <li> <span>&lt;title&gt;</span>
          : Inaonyesha kichwa cha hiyo document </li>
        <li> <span>&lt;body&gt;</span>
          : Ndani ya "body" ni hapo kila kitu ambacho ungependa kuweka kwenye document kinakwenda. ( Mfano: Kifungu, picha, vichwa vya habari, video, viunganishi etc... ) </li>
        <li> <span>&lt;h1&gt;</span>
          : hadi h6: inafafanua vichwa. h1 ikiwa kichwa kikubwa!</li>
        <li> <span>&lt;p&gt;</span>
          : inafafanua kifungu </li>
        <li> <span>&lt;b&gt;: au strong</span>
          : Inafanya maandishi kuwa na wino mzito</li>
        <li> <span>&lt;i&gt;: au em</span>
          : Inafanya maandishi kuwa italic au kama inayoegemea upande wa kulia</li>
        <li> <span>&lt;ul&gt;</span>
          : Huunda orodha isiyopangwa kwa namba.</li>
        <li> <span>&lt;ol&gt;</span>
          : Huunda orodha iliyopangwa kwa namba. Mfano(1 kisha sentensi, 2 kisha sentensi, etc)</li>
        <li> <span>&lt;li&gt;</span>
          : Inafafanua orodha au (list)</li>
        <li> <span>&lt;a href="https//www.example.com"&gt;</span>
          : hii inatengeneza kiunganishi kinachoitwa Hyperlink</li>
        <li> <span>&lt;img src="image.jpg" alt="maelezo"&gt;</span>
          : hii inaweka Picha kwenye kurasa</li>
        <li> <span>&lt;table&gt;</span>
          : hii inatengeneza table</li>
        <li> <span>&lt;tr&gt;</span>
          : hii inatengeneza mahali data yako itawekwa (table row)</li>
        <li> <span>&lt;td&gt;</span>
          : hii inamaanisha data utakayoweka kwenye Table</li>
        <li> <span>&lt;th&gt;</span>
          : hii inasimamia kichwa cha kila mstari wa data</li>
        <li> <span>&lt;form&gt;</span>
          : hii inatengeneza Fomu</li>
        <li> <span> &lt;input&gt;</span>
          : hii inatengeneza mahali mteja au aliyetembelea tovuti yako ataweka maelezo</li>
        <li> <span>&lt;label&gt;</span>
          : hii inasaidia kujuwa unaombwa kujaza nini</li>
        <li> <span>&lt;div&gt;</span>
          : Inafafanua mgawanyiko au sehemu.</li>
        <li> <span>&lt;span&gt;</span>
          : Inafafanua sehemu katika hati au kwenye Document</li>
      </div>
    </section>
    <!-- 
<section class="quiz section" id="quiz">
  <h3 class="ukurasa">11</h3>
  <h2 class="section__title">Mtihani</h2>
  <h4 class="subsection__title">Somo la 1 - Somo la 9</h4>

    
    <!- Multiple Choice Section -->
    <!-- <div class="quiz-section" id="multiple-choice">
        <h2 class="kichwakidogo">Multiple Choice Questions</h2>
        
        <div>
            <h3>1. What does HTML stand for?</h3>
            <label><input type="radio" name="q1" value="B"> HyperText Markup Language</label>
            <label><input type="radio" name="q1" value="A"> HyperText Markdown Language</label>
            <label><input type="radio" name="q1" value="C"> HyperText Machine Language</label>
            <label><input type="radio" name="q1" value="D"> HyperText Meta Language</label>
        </div>
        
        <div>
            <h3>2. Which tag is used to define the largest heading?</h3>
            <label><input type="radio" name="q2" value="C"> &lt;h1&gt;</label>
            <label><input type="radio" name="q2" value="A"> &lt;h6&gt;</label>
            <label><input type="radio" name="q2" value="B"> &lt;h5&gt;</label>
            <label><input type="radio" name="q2" value="D"> &lt;heading&gt;</label>
        </div>
        
        <div>
            <h3>3. Which tag is used to create a paragraph?</h3>
            <label><input type="radio" name="q3" value="B"> &lt;p&gt;</label>
            <label><input type="radio" name="q3" value="A"> &lt;para&gt;</label>
            <label><input type="radio" name="q3" value="C"> &lt;paragraph&gt;</label>
            <label><input type="radio" name="q3" value="D"> &lt;pg&gt;</label>
        </div>

        <div>
            <h3>4. Which of the following tags is used to make text bold?</h3>
            <label><input type="radio" name="q4" value="B"> &lt;b&gt;</label>
            <label><input type="radio" name="q4" value="A"> &lt;i&gt;</label>
            <label><input type="radio" name="q4" value="C"> &lt;italic&gt;</label>
            <label><input type="radio" name="q4" value="D"> &lt;em&gt;</label>
        </div>
        
        <div>
            <h3>5. Which tag creates a bullet-point list?</h3>
            <label><input type="radio" name="q5" value="A"> &lt;ul&gt;</label>
            <label><input type="radio" name="q5" value="B"> &lt;ol&gt;</label>
            <label><input type="radio" name="q5" value="C"> &lt;li&gt;</label>
            <label><input type="radio" name="q5" value="D"> &lt;list&gt;</label>
        </div>
        
        <div>
            <h3>6. What attribute is used to create a hyperlink?</h3>
            <label><input type="radio" name="q6" value="C"> href</label>
            <label><input type="radio" name="q6" value="A"> src</label>
            <label><input type="radio" name="q6" value="B"> alt</label>
            <label><input type="radio" name="q6" value="D"> link</label>
        </div>
        
        <div>
            <h3>7. Which tag is used to embed an image in a webpage?</h3>
            <label><input type="radio" name="q7" value="C"> &lt;img&gt;</label>
            <label><input type="radio" name="q7" value="A"> &lt;image&gt;</label>
            <label><input type="radio" name="q7" value="B"> &lt;pic&gt;</label>
            <label><input type="radio" name="q7" value="D"> &lt;src&gt;</label>
        </div>
        
        <div>
            <h3>8. Which tag defines a table row?</h3>
            <label><input type="radio" name="q8" value="A"> &lt;tr&gt;</label>
            <label><input type="radio" name="q8" value="B"> &lt;td&gt;</label>
            <label><input type="radio" name="q8" value="C"> &lt;th&gt;</label>
            <label><input type="radio" name="q8" value="D"> &lt;table&gt;</label>
        </div>
        
        <div>
            <h3>9. Which tag is used to define a form for user input?</h3>
            <label><input type="radio" name="q9" value="A"> &lt;form&gt;</label>
            <label><input type="radio" name="q9" value="B"> &lt;input&gt;</label>
            <label><input type="radio" name="q9" value="C"> &lt;label&gt;</label>
            <label><input type="radio" name="q9" value="D"> &lt;fieldset&gt;</label>
        </div>
        
        <div>
            <h3>10. Which element is used to group content in a block-level container?</h3>
            <label><input type="radio" name="q10" value="B"> &lt;div&gt;</label>
            <label><input type="radio" name="q10" value="A"> &lt;span&gt;</label>
            <label><input type="radio" name="q10" value="C"> &lt;section&gt;</label>
            <label><input type="radio" name="q10" value="D"> &lt;article&gt;</label>
        </div>
    </div>
    
    <!- True/False Section -->
    <!-- <div class="quiz-section" id="true-false">
        <h2 class="kichwakidogo">True or False Questions</h2>
        
        <div>
            <h3>1. The &lt;title&gt; tag is used to set the title of the web page.</h3>
            <label><input type="radio" name="tf1" value="true"> True</label>
            <label><input type="radio" name="tf1" value="false"> False</label>
        </div>
        
        <div>
            <h3>2. The &lt;p&gt; tag can contain other block-level elements like &lt;div&gt;.</h3>
            <label><input type="radio" name="tf2" value="false"> False</label>
            <label><input type="radio" name="tf2" value="true"> True</label>
        </div>
        
        <div>
            <h3>3. The &lt;em&gt; tag makes text bold.</h3>
            <label><input type="radio" name="tf3" value="false"> False</label>
            <label><input type="radio" name="tf3" value="true"> True</label>
        </div>
        
        <div>
            <h3>4. The &lt;ol&gt; tag is used to create an unordered list.</h3>
            <label><input type="radio" name="tf4" value="false"> False</label>
            <label><input type="radio" name="tf4" value="true"> True</label>
        </div>
        
        <div>
            <h3>5. The `src` attribute of the &lt;img&gt; tag specifies the URL of the image.</h3>
            <label><input type="radio" name="tf5" value="true"> True</label>
            <label><input type="radio" name="tf5" value="false"> False</label>
        </div>
    </div>
    
    <!- Short Answer Section -->
    <!-- <div class="quiz-section" id="short-answer">
        <h2 class="kichwakidogo">Short Answer Questions</h2>
        
        <div>
            <h3>1. What is the purpose of the `alt` attribute in the &lt;img&gt; tag?</h3>
            <input type="text" id="sa1">
        </div>
        
        <div>
            <h3>2. Explain the difference between &lt;ul&gt; and &lt;ol&gt; tags.</h3>
            <input type="text" id="sa2">
        </div>
        
        <div>
            <h3>3. What does the &lt;head&gt; section of an HTML document contain?</h3>
            <input type="text" id="sa3">
        </div>
        
        <div>
            <h3>4. Why is the `&lt;!DOCTYPE html&gt;` declaration important?</h3>
            <input type="text" id="sa4">
        </div>
        
        <div>
            <h3>5. Describe the role of the &lt;form&gt; tag in HTML.</h3>
            <input type="text" id="sa5">
        </div>
    </div>
    
    <button onclick="submitQuiz()">Submit</button>
    
    <div id="result" class="result"></div>  -->

    </section>
    <script>
      function submitQuiz() {
        let score = 0;
        let totalQuestions = 15;

        // Multiple Choice Answers
        const multipleChoiceAnswers = {
          q1: 'B',
          q2: 'C',
          q3: 'B',
          q4: 'B',
          q5: 'A',
          q6: 'C',
          q7: 'C',
          q8: 'A',
          q9: 'A',
          q10: 'B'
        };

        // True/False Answers
        const trueFalseAnswers = {
          tf1: 'true',
          tf2: 'false',
          tf3: 'false',
          tf4: 'false',
          tf5: 'true'
        };

        // Short Answer Answers
        const shortAnswerAnswers = {
          sa1: 'Provides alternative text for the image if it cannot be displayed.',
          sa2: 'The &lt;ul&gt; tag creates an unordered (bulleted) list, while the &lt;ol&gt; tag creates an ordered (numbered) list.',
          sa3: 'The &lt;head&gt; section contains meta-information about the HTML document, such as the title and links to stylesheets.',
          sa4: 'The `&lt;!DOCTYPE html&gt;` declaration defines the document type and version of HTML being used.',
          sa5: 'The &lt;form&gt; tag is used to create a form for user input, including various form controls like text fields and buttons.'
        };

        // Check Multiple Choice Answers
        for (const [question, correctAnswer] of Object.entries(multipleChoiceAnswers)) {
          const userAnswer = document.querySelector(`input[name="${question}"]:checked`);
          if (userAnswer && userAnswer.value === correctAnswer) {
            score++;
          }
        }

        // Check True/False Answers
        for (const [question, correctAnswer] of Object.entries(trueFalseAnswers)) {
          const userAnswer = document.querySelector(`input[name="${question}"]:checked`);
          if (userAnswer && userAnswer.value === correctAnswer) {
            score++;
          }
        }

        // Check Short Answer Answers
        for (const [question, correctAnswer] of Object.entries(shortAnswerAnswers)) {
          const userAnswer = document.getElementById(question).value.trim();
          if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
            score++;
          }
        }

        // Display Result
        const resultDiv = document.getElementById('result');
        resultDiv.textContent = `You scored ${score} out of ${totalQuestions}.`;
      }
    </script>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer section">


    <span class="footer__copy">
      &#169; $X copyright 2024 . All rigths reserved
    </span>
  </footer>


  <!--========== SCROLL UP ==========-->
  <a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
  </a>

  <!--=============== SCROLL REVEAL ===============-->
  <script src="assets/js/scrollreveal.min.js"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!--=============== MIXITUP JS ===============-->
  <script src="assets/js/mixitup.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>