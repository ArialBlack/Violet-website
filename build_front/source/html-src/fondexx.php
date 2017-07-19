<?php
$node = node_load(11);
?>

<!--(bake parts/head.php)-->

<body class='fondexx'>
    <!--(bake parts/nav-and-header.php)-->

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
                            <a href='/tax' class="page-title pull-right">
                                <?php print t('Tax from us');?>
                            </a>
                        </div>
                        <div class="col-xs-5 col-xs-offset-2 next-page">
                            <a href='/cfc' class="page-title pull-left">
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

    <!--(bake parts/footer.php)-->
</body>
</html>
