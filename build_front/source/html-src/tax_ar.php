<?php
$node = node_load(38);
?>

<!--(bake parts/head-ar.php)-->

<body class='tax'>
    <!--(bake parts/nav-and-header-ar.php)-->

    <main>
        <!-- tax-block-0 Head -->
        <div class="tax-block tax-block-0">
            <div class="container">
                <div class="fondex-logo opacity">
                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_logo.png" alt="">
                </div>
                <h1 class="opacity"><?php print $node->title;?></h1>
                <p class="title-descr opacity">
                    <?php print $node->body['und'][0]['value']; ?>
                </p>
                <div class="vert-line">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">
                            <p class="sub-title horizontal-line opacity">
                                <?php print $node->body['und'][1]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <p class="tax-block-text opacity">
                                <?php print $node->body['und'][2]['value']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /tax-block-0 Head -->

            <!-- tax-block-1 -->
            <div class="tax-block tax-block-1 white-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <h2 class="opacity"><?php print $node->body['und'][3]['value']; ?></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_1.png" alt="">
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_2.png" alt="">
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_3.png" alt="">
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_4.png" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <h2 class="opacity"><?php print $node->body['und'][4]['value']; ?></h2>
                            <div class="winner">
                                <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_final.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="vert-line">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-md-offset-1">
                                <p class="sub-title opacity">
                                    <?php print $node->body['und'][5]['value']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paper-design">
                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_paper_design.png" alt="">
                </div>
            </div>

            <!-- /tax-block-1 -->

            <!-- tax-block-2 -->
            <div class="tax-block tax-block-2">
                <div class="container">
                <div class="vert-line">
                    <div class="row first-row">
                        <div class="col-md-4 col-md-offset-1 video">
                            <p class='sub-title horizontal-line opacity'>
                                <?php print $node->body['und'][6]['value']; ?>
                            </p>
                            <!-- video -->
                            <a href="https://youtu.be/-MnbYG_iIkU" data-fancybox="group" class="fancy-video"><img src="/sites/all/themes/violet_ui/images/tax-from-us/video_monument.jpg" alt=""></a>
                            <!-- /video -->
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <p class='sub-title opacity'>
                                <?php print $node->body['und'][7]['value']; ?>
                            </p>
                            <!-- gallery -->
                            <div class="gallery">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/1.jpg" data-fancybox="group" data-caption="Caption #1">
                                        <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/2.jpg" data-fancybox="group" data-caption="Caption #2">
                                        <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/3.jpg" data-fancybox="group" data-caption="Caption #3">
                                        <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/4.jpg" data-fancybox="group" data-caption="Caption #4">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/5.jpg" data-fancybox="group" data-caption="Caption #5">
                                        <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/6.jpg" data-fancybox="group" data-caption="Caption #6">
                                        <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/gallery/7.jpg" data-fancybox="group" data-caption="Caption #7">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/gallery_img_7.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /gallery -->
                        </div>
                    </div>

                    <div class="row second-row">
                        <div class="col-md-5 col-md-offset-1">
                            <p class='sub-title horizontal-line opacity'>
                                <?php print $node->body['und'][8]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <p class="tax-block-text opacity">
                                <?php print $node->body['und'][9]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="laptop-img">
                        <!-- Laptop image -->
                        <img src="/sites/all/themes/violet_ui/images/tax-from-us/MacBookS.png" alt="">
                    </div>

                    <div class="row third-row">
                        <div class="col-md-5 col-lg-4 col-md-offset-1">
                            <p class='sub-title opacity'>
                                <?php print $node->body['und'][10]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <p class="tax-block-text opacity">
                                <?php print $node->body['und'][11]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="hor-gallery">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-6 text-center">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery/1.jpg" data-fancybox="group" data-caption="Caption #1">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery_img_1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-2 col-xs-6 text-center">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery/2.jpg" data-fancybox="group" data-caption="Caption #2">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery_img_2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-2 col-xs-6 text-center">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery/3.jpg" data-fancybox="group" data-caption="Caption #3">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery_img_3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-2 col-xs-6 text-center">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery/4.jpg" data-fancybox="group" data-caption="Caption #4">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery_img_4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-2 col-xs-12 text-center">
                                        <a href="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery/5.jpg" data-fancybox="group" data-caption="Caption #5">
                                            <img src="/sites/all/themes/violet_ui/images/tax-from-us/hor_gallery_img_5.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row fifth-row">
                        <div class="col-lg-4 col-md-5 col-md-offset-1">
                            <p class='sub-title horizontal-line opacity'>
                                <?php print $node->body['und'][12]['value']; ?>
                            </p>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <p class="tax-block-text opacity">
                                <?php print $node->body['und'][13]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Iphone-slider -->
                    <div class="iphone-slider text-center">
                        <a href="" class="prev button-slide"></a>
                        <a href="" class="next button-slide"></a>
                        <div class="slider-wrapper">
                            <ul class='slides-container' data-current=0>
                                <li class="slide-item">
                                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/slider/1.jpg" alt="">
                                </li>
                                <li class="slide-item">
                                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/slider/2.jpg" alt="">
                                </li>
                                <li class="slide-item">
                                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/slider/3.jpg" alt="">
                                </li>
                                <li class="slide-item">
                                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/slider/4.jpg" alt="">
                                </li>
                                <li class="slide-item">
                                    <img src="/sites/all/themes/violet_ui/images/tax-from-us/slider/5.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Iphone-slider -->


                    <div class="row sixth-row">
                        <div class="col-md-10 col-md-offset-1">
                            <p class='sub-title opacity'>
                                <?php print $node->body['und'][14]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <!-- Pages-pagination -->
                    <div class="row pages-pagination type-2">
                        <div class="col-md-12">
                            <div class="pagination-page-logo text-center">
                                <img src="/sites/all/themes/violet_ui/images/tax-from-us/tfu_logo.png" alt="">
                                <img src="/sites/all/themes/violet_ui/images/tax-from-us/monument.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xs-5 prev-page">
                            <a href='/ar/cfc' class="page-title pull-right">
                                <?php print t('cfc');?>
                            </a>
                        </div>
                        <div class="col-xs-5 col-xs-offset-2 next-page">
                            <a href='/ar/fondexx' class="page-title pull-left">
                                <?php print t('fondexx');?>
                            </a>
                        </div>
                    </div>
                    <!-- /Pages-pagination -->

                </div>
            </div>
        </div>
        <!-- /tax-block-2 -->
    </main>

    <!--(bake parts/footer-ar.php)-->
</body>
</html>