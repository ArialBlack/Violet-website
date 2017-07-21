<?php
$node = node_load(29);
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

<body class='fondexx'>
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
        <div class="left-bg-block"></div>
        <div class="city-bg-block"></div>
        <div class="right-bg-block"></div>
        <div class="container">
            <!-- fondexx-block-0 Head -->
            <div class="fondexx-block fondexx-block-0">
                <div class="fondex-logo opacity">
                    <img src="/sites/all/themes/violet_ui/images/fondexx/fondexx_logo.png" alt="">
                </div>
                <h1 class="opacity"><?php print $node->title;?></h1>
                <div class="row">
                    <div class="col-md-5">
                        <p class="title-descr opacity">
                            <?php print $node->body['und'][0]['value']; ?>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-md-offset-1">
                        <p class="fondex-block-text marked opacity">
                            <?php print $node->body['und'][1]['value']; ?>
                        </p>
                        <p class="fondex-block-text marked opacity">
                            <?php print $node->body['und'][2]['value']; ?>
                        </p>
                    </div>
                </div>
                <p class='title-descr opacity'>
                    <?php print $node->body['und'][3]['value']; ?>
                </p>
            </div>
            <!-- /fondexx-block-0 Head -->

            <!-- fondexx-block-1 -->
            <div class="fondex-block fondex-block-1">
                <h2 class="opacity"><?php print $node->body['und'][4]['value']; ?></h2>
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">
                            <p class="sub-title opacity">
                                <?php print $node->body['und'][5]['value']; ?>
                            </p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-md-offset-1">
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][6]['value']; ?>
                            </p>
                        </div>
                    </div>
                    <p class='fondex-block-text marked text-center opacity'><?php print $node->body['und'][7]['value']; ?></p>
                    <div class="fondex-logo text-center">
                        <img src="/sites/all/themes/violet_ui/images/fondexx/fondexx_logo.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /fondexx-block-1 -->

            <!-- fondexx-block-2 -->
            <div class="fondex-block fondex-block-2">
                <h2 class="opacity"><?php print $node->body['und'][8]['value']; ?></h2>
                <div class="row">
                    <div class="col-md-10">
                        <p class='title-descr opacity'>
                            <?php print $node->body['und'][9]['value']; ?>
                        </p>
                    </div>
                </div>

                <!-- vert-line -->
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <h3 class="opacity"><?php print $node->body['und'][10]['value']; ?></h3>
                            <p class='fondex-block-text marked opacity'>
                                <?php print $node->body['und'][11]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Images-galery -->
                        <div class="col-md-5 col-md-offset-1 left-gallery">
                            <div class="row gallery-row">
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/1.jpg" data-fancybox="group" data-caption="Caption #1">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/2.jpg" data-fancybox="group" data-caption="Caption #2">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/3.jpg" data-fancybox="group" data-caption="Caption #3">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row gallery-row">
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/4.jpg" data-fancybox="group" data-caption="Caption #4">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/5.jpg" data-fancybox="group" data-caption="Caption #5">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/6.jpg" data-fancybox="group" data-caption="Caption #6">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row gallery-row">
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/7.jpg" data-fancybox="group" data-caption="Caption #7">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/8.jpg" data-fancybox="group" data-caption="Caption #8">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/9.jpg" data-fancybox="group" data-caption="Caption #9">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row gallery-row">
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/10.jpg" data-fancybox="group" data-caption="Caption #10">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_10.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/11.jpg" data-fancybox="group" data-caption="Caption #11">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_11.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_1/12.jpg" data-fancybox="group" data-caption="Caption #12">
                                        <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_12.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Images-galery -->

                        <div class="col-md-6 col-lg-4">
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][12]['value']; ?>
                            </p>
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][13]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <h3 class="opacity"><?php print $node->body['und'][14]['value']; ?></h3>
                            <p class='fondex-block-text marked opacity'>
                                <?php print $node->body['und'][15]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <!-- Iphone-slider -->
                            <div class="iphone-slider text-center">
                                <a href="" class="prev button-slide"></a>
                                <a href="" class="next button-slide"></a>
                                <div class="slider-wrapper">
                                    <ul class='slides-container' data-current=0>
                                        <li class="slide-item">
                                            <img src="/sites/all/themes/violet_ui/images/fondexx/slider/1.jpg" alt="">
                                        </li>
                                        <li class="slide-item">
                                            <img src="/sites/all/themes/violet_ui/images/fondexx/slider/2.jpg" alt="">
                                        </li>
                                        <li class="slide-item">
                                            <img src="/sites/all/themes/violet_ui/images/fondexx/slider/3.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Iphone-slider -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-offset-0 col-xs-offset-3 text-center second-gallery">
              <div class="row">
                <div class="col-md-4 col-xs-6 col-md-offset-3">
                  <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_2/1.jpg" data-fancybox="group" data-caption="Caption">
                    <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_2_1.jpg" alt="">
                  </a>
                </div>
                <div class="col-md-4 col-xs-6">
                  <a href="/sites/all/themes/violet_ui/images/fondexx/gallery_imgs_2/2.jpg" data-fancybox="group" data-caption="Caption">
                    <img src="/sites/all/themes/violet_ui/images/fondexx/gallery_img_2_2.jpg" alt="">
                  </a>
                </div>
              </div>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][16]['value']; ?>
                            </p>
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][17]['value']; ?>
                            </p>
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][18]['value']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /vert-line -->
            </div>
            <!-- fondexx-block-2 -->

            <!-- fondexx-block-3 -->
            <div class="fondex-block fondex-block-3">
                <h2 class="opacity"><?php print $node->body['und'][19]['value']; ?></h2>
                <div class="row">
                    <div class="col-md-10">
                        <p class='title-descr opacity'>
                            <?php print $node->body['und'][20]['value']; ?>
                        </p>
                    </div>
                </div>
                <!-- vert-line -->
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <p class="sub-title opacity">
                                <?php print $node->body['und'][21]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][22]['value']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h4 class="opacity">
                                <?php print $node->body['und'][23]['value']; ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- /vert-line -->
            </div>
            <!-- /fondexx-block-3 -->

            <!-- fondexx-block-4 -->
            <div class="fondex-block fondex-block-4">
                <h2 class="opacity"><?php print $node->body['und'][24]['value']; ?></h2>
                <!-- vert-line -->
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <p class='sub-title opacity'>
                                <?php print $node->body['und'][25]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-2 num text-right opacity">1 /</div>
                                <div class="col-md-10">
                                    <p class='fondex-block-text marked opacity'>
                                        <?php print $node->body['und'][26]['value']; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 num text-right opacity">2 /</div>
                                <div class="col-md-10">
                                    <p class='fondex-block-text marked opacity'>
                                        <?php print $node->body['und'][27]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][28]['value']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /vert-line -->
            </div>
            <!-- /fondexx-block-4 -->

            <!-- fondexx-block-5 -->
            <div class="fondex-block fondex-block-5">
                <h2 class="opacity"><?php print $node->body['und'][29]['value']; ?></h2>
                <!-- vert-line -->
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <p class="sub-title opacity">
                                <?php print $node->body['und'][30]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 circles">
                            <div class="dashed-circle">
                                <p class='fondex-block-text text-center opacity'>
                                    <?php print $node->body['und'][31]['value']; ?>
                                </p>
                            </div>

                            <div class="dashed-circle pull-right">
                                <p class='fondex-block-text text-center opacity'>
                                    <?php print $node->body['und'][32]['value']; ?>
                                </p>
                            </div>

                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <p class='fondex-block-text marked text-center opacity'>
                                <?php print $node->body['und'][33]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="target">
                        <h2 class='text-center opacity'><?php print $node->body['und'][34]['value']; ?></h2>
                    </div>
                    <div class="color-curves-bg">
                        <img src="/sites/all/themes/violet_ui/images/fondexx/target_bg.png" alt="">
                    </div>
                </div>
                <!-- /vert-line -->
            </div>
            <!-- /fondexx-block-5 -->

            <!-- fondexx-block-6 -->
            <div class="fondex-block fondex-block-6">
                <h2 class="opacity"><?php print $node->body['und'][35]['value']; ?></h2>
                <div class="socials-icons opacity">
                    <a href=""><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>
                <!-- vert-line -->
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <p class="sub-title opacity">
                                <?php print $node->body['und'][36]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <p class='fondex-block-text opacity'>
                                <?php print $node->body['und'][37]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Pages-pagination -->
                    <div class="row pages-pagination type-2">
                        <div class="col-md-12">
                            <div class="pagination-page-logo text-center">
                                <img src="/sites/all/themes/violet_ui/images/fondexx/fondexx_logo.png" alt="">
                                <img src="/sites/all/themes/violet_ui/images/fondexx/bronze_bull.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-5 prev-page">
                            <a href='/ar/tax' class="page-title pull-right">
                                <?php print t('Tax from us');?>
                            </a>
                        </div>
                        <div class="col-xs-5 col-xs-offset-2 next-page">
                            <a href='/ar/cfc' class="page-title pull-left">
                                <?php print t('Cfc');?>
                            </a>
                        </div>
                    </div>
                    <!-- /Pages-pagination -->

                </div>
                <!-- /vert-line -->
            </div>
            <!-- /fondexx-block-6 -->

        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="logo text-center">
                        <a href="/"> <img src="/sites/all/themes/violet_ui/images/main/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-8">
                    <nav class="nav-footer">
                        <ul class="nav">
                            <li><a href="/"><?php print t('Home');?></a></li>
                            <li><a href="/about-company"><?php print t('Who we are');?></a></li>
                            <li><a href="/comps"><?php print t('What we do');?></a></li>
                            <li><a href="/contacts"><?php print t('Get in touch');?></a></li>
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
