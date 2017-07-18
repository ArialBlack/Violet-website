<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Violet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/sites/all/themes/violet_ui/css/style.css">
    <!DOCTYPE html>
    <html lang="en">
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
</head>
<body class="page-main">

<nav class="nav-main">
    <ul class="nav">
        <li><a href="/about-company">Who we are</a></li>
        <li><a href="/comps">What we do</a></li>
        <li><a href="/contacts">Get in touch</a></li>
    </ul>
    <ul class="mobile-nav">
        <li>
            <span class='contact-item'>
                <span>Phone&nbsp;:</span>&nbsp;<a href="tel:<?php print variable_get('violet_tel_num');?>"><?php print variable_get('violet_tel_text');?></a>
            </span>
        </li>
        <li>
            <span class="contact-item">
                <span>Skype&nbsp;:</span>&nbsp;<a href="skype:<?php print variable_get('violet_skype');?>"><?php print variable_get('violet_skype');?></a>
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
                            <span>Phone&nbsp;:</span>&nbsp;<a href="tel:<?php print variable_get('violet_tel_num');?>"><?php print variable_get('violet_tel_text');?></a>
                        </span>
                    <span class="devide-contacts">&nbsp; | &nbsp;</span>
                        <span class="contact-item">
                            <span>Skype&nbsp;:</span>&nbsp;<a href="skype:<?php print variable_get('violet_skype');?>"><?php print variable_get('violet_skype');?></a>
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


<?php
    $node = node_load(22);
?>

<div class="jumb text-center">
    <div class="container">
        <div class="vert-center">
            <div class="logo opacity-animation">
                <a href="/"> <img src="/sites/all/themes/violet_ui/images/main/logo.png" alt=""></a>
            </div>
            <div class="about">
                <h1 class='opacity-animation'>We are digital marketing agency.</h1>
                <div class="slogan opacity-animation">Creative, loving, effective.</div>
            </div>
        </div>
        <a href='#scroll-to' class="scroll-down opacity-animation"></a>
    </div>
</div>
<main class="main about-company" id="scroll-to">
            <div class="left-bg-block"></div>
            <div class="center-bg-block"></div>
            <div class="right-bg-block"></div>
            <!--<object type="image/svg+xml" data="../images/svg/V.svg" class="svg-right-rect" id="svg-r">
            </object>-->
            <!--<svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-right-rect">
                <image width="80" height="80" xlink:href="../images/svg/V.svg"/>
            </svg>-->
        <div class="container" id="cont-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve"  class="svg-right-rect">
                    <path d="M185.2,50.2l-42.3,80.3L96.8,50.2H43.2v53.1l74.4,129.4h53l68-129.2l0.2-0.3v-53H185.2z M236.1,101.6h-48.8V52.9h48.8V101.6  z M143,136.1l24.5,42.7h-48.2l-22.1-76V56.5L143,136.1L143,136.1z M184.7,102.8l-15.4,73.6l-24.8-43.1l40.2-76.4V102.8z M95,104.3  l22.1,76v46.3L46.8,104.3H95z M119.7,181.4h48.8v48.8h-48.8V181.4z M171.2,180.2l15.9-75.9h48.2l-64.1,121.8V180.2z M94.7,52.9v48.8  H45.9V52.9H94.7z"/>
            </svg>
        <div class="vertical-line"></div>
                <div class="approach">
                    <div class="row">
                        <div class="text-center">
                            <h2 class="opacity"><?php print $node->body['und'][0]['value']; ?></h2>
                        </div>
                    </div>

                    <div class="approach-blocks">

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity" dir='rtl'><?php print $node->body['und'][1]['value']; ?></h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity" dir='rtl'><?php print $node->body['und'][2]['value']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Identity and brand positioning
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        We study your business philosophy and reputation. We can <br> create or redesign your logo, your brand colors, your
                                        <br> tagline, your website and mobile app. We set identity usage <br> rules (brand book) for all types of advertising; we create the
                                        <br> firm style for printing materials.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Typical steps of website development
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        Statement of work <br>
                                        UX design prototypes and UI designs (in colors). <br>
                                        Back-end development and Front-end <br>
                                        development. <br>
                                        Mobile adaptation. <br>
                                        Testing. <br>
                                        Mobile app development. <br>
                                        One year of free technical support.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Typical steps of the marketing campaign
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                      Marketing strategy (what are goals, who are the target audience, how to reach them, what to tell them, how to tell them?).<br>
                                      Statement of work (timeline, list of tasks, budgets, goals).<br>
                                      Content creation (designs, copywriting, photo or video-editing).<br>
                                      1 stage of implementation (3 weeks)<br>
                                      Analyzing results<br>
                                      Testing and improving marketing model due to first results.<br>
                                      2 stage of implementation<br>
                                      Analyzing results<br>
                                      Testing and improving marketing model due to first results.<br>
                                      Flexibility is the guarantee of success.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="competencies text-center">
                    <div class="rectangle-bg-block"></div>
                    <h3 class="opacity"><a href="/about-company">Who we are</a> <br> <a href="/comps">competencies</a></h3>
                </div>

                <div class="project-team">
                    <div class="text-center col-sm-offset-">
                        <h2 class="opacity">Our typical project team</h2>
                    </div>

                    <div class="team-blocks">

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Project management (Chief Strategist, Chief Executive Officer, Account director, Creative Director)
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        Project managers are responsible for marketing plan realization pace. They guarantee quality, consider market positioning and business logic of clients online presence, looks through visual realization of the idea.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Development team (CTO + back end and front end developers)
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        The development team is responsible for programming the websites and mobile apps. We have the solid stack of technologies to ensure any solution to be created.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Design team
                                        ( UX designer,
                                         UI designer)
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        The design team is responsible for brand book and identity creation, UX prototypes and UI designs, photoshoots and video-editing, animation.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Creative team (Creative Director, Copywriters, Photographers)
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        Creators are responsible for content generations (advertisements, viral videos, tv shoots, texts, taglines, social media promotions, etc.), advertisements management, media buying and SEO structuring.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block last">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        Marketing team (Digital Director, SEO managers,
                                        SMM managers, Marketing managers)
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        Marketing team is responsible for advertisement management, search engine optimization, social media management and media buying.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4 col-sm-6 col-sm-offset-6">
                            <button class="btn btn-dwn btn-red text-center opacity"><a href="/sites/all/themes/violet_ui/images/creads.pdf" target="_blank">Credentials Download <img src="/sites/all/themes/violet_ui/images/main/arrow_down.png" alt=""></a></button>
                        </div>
                    </div>
                   <!-- <img src="../images/svg/V2.svg" alt="" class="svg-right-rect">-->
                </div>

                <div class="consulting">
                    <div class="row">
                        <div class="col-sm-7 col-md-offset-4 col-sm-offset-5">
                            <div class="text-center">
                                <h2 class="opacity">Free consulting</h2>
                            </div>
                            <p class="opacity">
                                We know that making marketing decisions may be tough. Let us share our experience and ideas with you. We will do that pro bono, just to prove you that we know our job.
                            </p>
                            <p class="marked opacity">
                                To get free consulting just fill the form and we will get back you shortly.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-block">
                                    <h5 class="opacity">Please, use our <span>contact form:</span></h5>
                                        <div id="contact-form">
                                            <?php
                                            $feedback_block = module_invoke('webform', 'block_view', 'client-block-2');
                                            print render($feedback_block['content']);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-company">Who we are</a></li>
                            <li><a href="/comps">What we do</a></li>
                            <li><a href="/contacts">Get in touch</a></li>
                        </ul>
                    </nav>

                    <div class="copyright">
                        <p>
                            2016 &copy; All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 text-center">
                    <div class="social-icons">
                        <div class="social-icon instagramm"><a href="#"></a></div>
                        <div class="social-icon twitter"><a href="#"></a></div>
                        <div class="social-icon facebook"><a href="#"></a></div>
                        <div class="social-icon linkedin"><a href="#"></a></div>
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
