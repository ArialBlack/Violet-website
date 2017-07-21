<?php
$node = node_load(26);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php print $node->title;?> | <?php print variable_get('site_name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/sites/all/themes/violet_ui/css/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/sites/all/themes/violet_ui/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/sites/all/themes/violet_ui/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/sites/all/themes/violet_ui/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/sites/all/themes/violet_ui/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/sites/all/themes/violet_ui/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/sites/all/themes/violet_ui/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/sites/all/themes/violet_ui/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/sites/all/themes/violet_ui/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/sites/all/themes/violet_ui/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/sites/all/themes/violet_ui/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/sites/all/themes/violet_ui/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/sites/all/themes/violet_ui/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/sites/all/themes/violet_ui/favicon-16x16.png">
    <link rel="manifest" href="/sites/all/themes/violet_ui/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/sites/all/themes/violet_ui/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class='company-descr'>
<nav class="nav-main">
    <ul class="nav">
        <li><a href="/ar/about-company"><?php print t('Who we are');?></a></li>
        <li><a href="/ar/comps"><?php print t('What we do');?></a></li>
        <li><a href="/ar/contacts"><?php print t('Get in touch');?></a></li>
    </ul>
    <ul class="mobile-nav">
        <li>
            <span class='contact-item'>
                <span><?php print t('Phone');?>&nbsp;:</span>&nbsp;<a href="tel:<?php print variable_get('violet_tel_num');?>"><?php print variable_get('violet_tel_text');?></a>
            </span>
        </li>
        <li>
            <span class="contact-item">
                <span><?php print t('Skype');?>&nbsp;:</span>&nbsp;<a href="skype:<?php print variable_get('violet_skype');?>"><?php print variable_get('violet_skype');?></a>
            </span>
        </li>
        <li class="lang">
          <a href="/">English</a> <span class="divide">/</span> <a href="/arabic">Arabic</a>
        </li>
    </ul>
    <div class="bubble-animation"></div>
    <div class="burger-button">
        <span class='rot-left'></span>
        <span class='rot-right'></span>
        <span class='active-disable'></span>
    </div>
</nav>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8 mob-to-burger">
                <div class="contacts">
                        <span class='contact-item'>
                            <span><?php print t('Phone');?>&nbsp;:</span>&nbsp;<a href="tel:<?php print variable_get('violet_tel_num');?>"><?php print variable_get('violet_tel_text');?></a>
                        </span>
                    <span class="devide-contacts">&nbsp; | &nbsp;</span>
                        <span class="contact-item">
                            <span><?php print t('Skype');?>&nbsp;:</span>&nbsp;<a href="skype:<?php print variable_get('violet_skype');?>"><?php print variable_get('violet_skype');?></a>
                        </span>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <a href="/" class="clients">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve"  class="svg-header-logo">
                            <path d="M185.2,50.2l-42.3,80.3L96.8,50.2H43.2v53.1l74.4,129.4h53l68-129.2l0.2-0.3v-53H185.2z M236.1,101.6h-48.8V52.9h48.8V101.6  z M143,136.1l24.5,42.7h-48.2l-22.1-76V56.5L143,136.1L143,136.1z M184.7,102.8l-15.4,73.6l-24.8-43.1l40.2-76.4V102.8z M95,104.3  l22.1,76v46.3L46.8,104.3H95z M119.7,181.4h48.8v48.8h-48.8V181.4z M171.2,180.2l15.9-75.9h48.2l-64.1,121.8V180.2z M94.7,52.9v48.8  H45.9V52.9H94.7z"/>
                        </svg>
                </a>
            </div>
            <div class="col-md-3 col-md-offset-2 col-sm-4 mob-to-burger">
                <div class="lang">
                  <a href="/">English</a> <span class="divide"></span> <a href="/arabic">Arabic</a>
                </div>
            </div>
        </div>
        <button class="burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="burger-content text-center">
            <div class="row">
                <!-- Here content -->
            </div>
        </div>
    </div>
</header>


  <main>
    <div class="top-fst-bg-block"></div>
    <div class="top-bg-block"></div>
    <div class="middle-bg-block">
      <img src="/sites/all/themes/violet_ui/images/who-we-are/right_center_bg_2.jpg" alt="">
    </div>
    <div class="bottom-bg-block"></div>
    <div class="site-content">
    <div class="container">
      <!-- Blocks-descr -->
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve"  class="svg-right-rect">
        <path d="M185.2,50.2l-42.3,80.3L96.8,50.2H43.2v53.1l74.4,129.4h53l68-129.2l0.2-0.3v-53H185.2z M236.1,101.6h-48.8V52.9h48.8V101.6  z M143,136.1l24.5,42.7h-48.2l-22.1-76V56.5L143,136.1L143,136.1z M184.7,102.8l-15.4,73.6l-24.8-43.1l40.2-76.4V102.8z M95,104.3  l22.1,76v46.3L46.8,104.3H95z M119.7,181.4h48.8v48.8h-48.8V181.4z M171.2,180.2l15.9-75.9h48.2l-64.1,121.8V180.2z M94.7,52.9v48.8  H45.9V52.9H94.7z"/>
      </svg>
      <div class="block-descr mission">
        <h1 class="opacity"><?php print $node->title;?></h1>
        <p class="opacity">
          <?php print $node->body['und'][0]['value']; ?>
        </p>
        <p class='outcome opacity'><?php print $node->body['und'][1]['value']; ?></p>
      </div>

      <div class="block-descr why-work">
        <h2 class="opacity"><?php print $node->body['und'][2]['value']; ?></h2>
        <p class="opacity">
          <?php print $node->body['und'][3]['value']; ?>
        </p>
        <p class='outcome opacity'><?php print $node->body['und'][4]['value']; ?></p>
      </div>

      <div class="block-descr placement">
        <h2 class="opacity"><?php print $node->body['und'][5]['value']; ?></h2>
        <p class="opacity">
          <?php print $node->body['und'][6]['value']; ?>
        </p>
        <p class='outcome opacity'><?php print $node->body['und'][7]['value']; ?></p>
      </div>
      <!-- /Blocks-descr -->

      <!-- Company team -->
      <div class="team">
        <h3 class="opacity"><?php print $node->body['und'][8]['value']; ?></h3>
        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Fahad Al-Shehri');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][9]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/fahad.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][10]['value']; ?>
              </p>
            </div>
          </div>
        </div>

        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Masud Nadim');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][11]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/nadim.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][12]['value']; ?>
              </p>
            </div>
          </div>
        </div>

        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Nikita Synov');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][13]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/nikita.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][14]['value']; ?>
              </p>
            </div>
          </div>
        </div>

        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Hlib Kozak');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][15]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/hlib.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][16]['value']; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Diego Malamadre');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][17]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/diego.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][18]['value']; ?>
              </p>
            </div>
          </div>
        </div>

        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Andrey Turik');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][19]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/andriy.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][20]['value']; ?>
              </p>
            </div>
          </div>
        </div>

        <div class="person">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h4 class='person-name opacity'><?php print t('Nazar Gulyk');?></h4>
              <span class='person-position opacity'><?php print $node->body['und'][21]['value']; ?></span>
            </div>
            <div class="col-md-5 col-sm-7 col-sm-offset-1">
              <div class="person-photo opacity">
                <img src="/sites/all/themes/violet_ui/images/who-we-are/people/nazar.jpg" alt="">
              </div>
              <p class='person-desr opacity'>
                <?php print $node->body['und'][22]['value']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- /Company team -->

    </div>
  </div>
  </main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="logo text-center">
                    <a href="/ar"> <img src="/sites/all/themes/violet_ui/images/main/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-8">
                <nav class="nav-footer">
                    <ul class="nav">
                        <li><a href="/ar"><?php print t('Home');?></a></li>
                        <li><a href="/ar/about-company"><?php print t('Who we are');?></a></li>
                        <li><a href="/ar/comps"><?php print t('What we do');?></a></li>
                        <li><a href="/ar/contacts"><?php print t('Get in touch');?></a></li>
                    </ul>
                </nav>

                <div class="copyright">
                    <p><?php print variable_get('violet_copyrights'); ?></p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 text-center">
                <div class="social-icons">
                    <div class="social-icon instagramm"><a href="https://www.instagram.com/violet.marketing/" target="_blank"></a></div>
                    <div class="social-icon twitter"><a href="https://twitter.com/VioletMarketing" target="_blank"></a></div>
                    <div class="social-icon facebook"><a href="#"></a></div>
                    <div class="social-icon linkedin"><a href="https://www.linkedin.com/in/violet-marketing-1369a3146/" target="_blank"></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/sites/all/themes/violet_ui/js/vendors/jquery.min.js"></script>
<script src="/sites/all/themes/violet_ui/js/main.js"></script>
<script src="/sites/all/themes/violet_ui/js/noframework.waypoints.min.js"></script>
<script src="/sites/all/themes/violet_ui/js/fancybox.js"></script>
<script src="/sites/all/themes/violet_ui/js/vendors/jquery.fancybox.min.js"></script>

</body>
</html>
