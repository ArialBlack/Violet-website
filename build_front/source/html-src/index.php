<?php
$node = node_load(3);
?>

<!--(bake parts/head.php)-->

<body class="page-main">

<!--(bake parts/nav-and-header.php)-->

<div class="jumb text-center">
    <div class="container">
        <div class="vert-center">
            <div class="logo opacity-animation">
                <a href="/"> <img src="/sites/all/themes/violet_ui/images/main/logo.png" alt=""></a>
            </div>
            <div class="about">
                <h1 class='opacity-animation'><?php print $node->title;?></h1>
                <div class="slogan opacity-animation"><?php print variable_get('site_slogan'); ?></div>
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
                                    <h4 class="opacity"><?php print $node->body['und'][1]['value']; ?></h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity"><?php print $node->body['und'][2]['value']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][3]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][4]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][5]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][6]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="approach-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][7]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][8]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="competencies text-center">
                    <div class="rectangle-bg-block"></div>
                    <h3 class="opacity"><?php print $node->body['und'][9]['value']; ?></h3>
                </div>

                <div class="project-team">
                    <div class="text-center col-sm-offset-">
                        <h2 class="opacity"><?php print $node->body['und'][10]['value']; ?></h2>
                    </div>

                    <div class="team-blocks">

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][11]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][12]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][13]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][14]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][15]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][16]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][17]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][18]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="team-block last">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <h4 class="opacity">
                                        <?php print $node->body['und'][19]['value']; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-sm-7 col-sm-offset-1">
                                    <p class="opacity">
                                        <?php print $node->body['und'][20]['value']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4 col-sm-6 col-sm-offset-6">
                            <button class="btn btn-dwn btn-red text-center opacity"><a href="/sites/all/themes/violet_ui/images/creads.pdf" target="_blank"><?php print t('Credentials Download');?> <img src="/sites/all/themes/violet_ui/images/main/arrow_down.png" alt=""></a></button>
                        </div>
                    </div>
                   <!-- <img src="../images/svg/V2.svg" alt="" class="svg-right-rect">-->
                </div>

                <div class="consulting">
                    <div class="row">
                        <div class="col-sm-7 col-md-offset-4 col-sm-offset-5">
                            <div class="text-center">
                                <h2 class="opacity"><?php print $node->body['und'][21]['value']; ?></h2>
                            </div>
                            <p class="opacity">
                                <?php print $node->body['und'][22]['value']; ?>
                            </p>
                            <p class="marked opacity">
                                <?php print $node->body['und'][23]['value']; ?>
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-block">
                                    <h5 class="opacity"><?php print $node->body['und'][24]['value']; ?></h5>
                                        <!--(bake parts/form.php)-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </main>

    <!--(bake parts/footer.php)-->
</body>
</html>
