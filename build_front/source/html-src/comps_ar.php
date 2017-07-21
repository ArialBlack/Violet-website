<?php
$node = node_load(27);
?>

<!--(bake parts/head-ar.php)-->

<body class='comps'>
<!--(bake parts/nav-and-header-ar.php)-->

    <main>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve"  class="svg-right-rect">
            <path d="M185.2,50.2l-42.3,80.3L96.8,50.2H43.2v53.1l74.4,129.4h53l68-129.2l0.2-0.3v-53H185.2z M236.1,101.6h-48.8V52.9h48.8V101.6  z M143,136.1l24.5,42.7h-48.2l-22.1-76V56.5L143,136.1L143,136.1z M184.7,102.8l-15.4,73.6l-24.8-43.1l40.2-76.4V102.8z M95,104.3  l22.1,76v46.3L46.8,104.3H95z M119.7,181.4h48.8v48.8h-48.8V181.4z M171.2,180.2l15.9-75.9h48.2l-64.1,121.8V180.2z M94.7,52.9v48.8  H45.9V52.9H94.7z"/>
        </svg>

        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="opacity">
                        <?php print $node->title;?>
                    </h1>
                </div>
            </div>
            <!-- /Title -->


            <!-- Brief-info and pages-nav-->
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <h3 class="opacity">
                        <?php print $node->body['und'][0]['value']; ?>
                    </h3>
                </div>
                <div class="col-md-3">
                    <p class='brief-info opacity'>
                        <?php print $node->body['und'][1]['value']; ?>
                    </p>
                </div>
            </div>
            <!-- /Brief-info and pages-nav-->

            <!-- First-row-comp -->
            <div class="row row-comp row-comp-first">
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print $node->body['und'][2]['value']; ?></h4>
                        <div class="comp-logo text-center">
                            <img src="/sites/all/themes/violet_ui/images/strategy/strategy_logo.png" alt="">
                        </div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][3]['value']; ?>
                            <a href="/ar/strategy" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print t('Branding');?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/branding/branding_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][4]['value']; ?>
                            <a href="/ar/branding" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print $node->body['und'][5]['value']; ?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/design/design_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][6]['value']; ?>
                            <a href="/ar/design" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print $node->body['und'][7]['value']; ?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/mob-marketing/marketing_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][8]['value']; ?>
                            <a href="/ar/mobile-marketing" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /First-row-comp -->

            <!-- Second-row-comp -->
            <div class="row row-comp">
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print t('Seo');?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/seo/seo_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][9]['value']; ?>
                            <a href="/ar/seo" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print t('Smm');?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/smm/smm_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][10]['value']; ?>
                            <a href="/sar/mm" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print $node->body['und'][11]['value']; ?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/mail-marketing/marketing_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][12]['value']; ?>
                            <a href="/ar/mail-marketing" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="comp-block">
                        <h4 class="comp-title text-center"><?php print $node->body['und'][13]['value']; ?></h4>
                        <div class="comp-logo text-center"><img src="/sites/all/themes/violet_ui/images/advertising/adv_logo.png" alt=""></div>
                        <div class="arrow-down"></div>
                        <p class="comp-descr-hide">
                            <?php print $node->body['und'][14]['value']; ?>
                            <a href="/ar/advertising" class="comp-more"><?php print t('learn more');?></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Second-row-comp -->

        </div>
    </main>

    <!--(bake parts/footer.php)-->
</body>
</html>
