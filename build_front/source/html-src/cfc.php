<?php
$node = node_load(7);
?>

<!--(bake parts/head.php)-->

<body class='cfc'>
    <!--(bake parts/nav-and-header.php)-->

    <main>
        <div class="container">

            <!-- Title -->
            <div class="row">
                <div class="col-md-9">
                    <h1 class="opaity"><?php print $node->title;?></h1>
                    <p class="title-descr opacity">
                        <?php print $node->body['und'][0]['value']; ?>
                    </p>
                </div>
            </div>
            <!-- /Title -->


            <!-- cfc-block-1-->
            <div class="row cfc-block cfc-block-1">
                <div class="col-md-12">
                    <h2 class="opacity"><?php print $node->body['und'][1]['value']; ?></h2>
                </div>
                <div class="col-md-offset-1 col-md-6">
                    <p class='cfc-block-text marked opacity'>
                        <?php print $node->body['und'][2]['value']; ?>
                    </p>
                    <p class='cfc-block-text opacity'>
                        <?php print $node->body['und'][3]['value']; ?>
                    </p>
                </div>
                <div class="col-md-11 col-md-offset-1">
                    <h4 class="opacity"><?php print $node->body['und'][4]['value']; ?></h4>
                    <div class="patter-img">
                        <img src="/sites/all/themes/violet_ui/images/cfc/cfc_pattern.png" alt="">
                    </div>
                </div>
            </div>
            <!-- cfc-block-1-->

            <!-- cfc-block-2-->
            <div class="row cfc-block cfc-block-2">
                <div class="col-md-12">
                    <h2 class="opacity"><?php print $node->body['und'][5]['value']; ?></h2>
                </div>

                <div class="col-md-offset-1 col-md-5">
                    <p class='cfc-block-text marked opacity'>
                        <?php print $node->body['und'][6]['value']; ?>
                    </p>
                    <p class='cfc-block-text opacity'>
                        <?php print $node->body['und'][7]['value']; ?>
                    </p>
                </div>

                <!-- Images 9 -->
                <div class="col-md-5 col-md-offset-1 right-gallery">
                    <div class="row gallery-row">
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/1.jpg" data-fancybox="group" data-caption="Caption #1">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/2.jpg" data-fancybox="group" data-caption="Caption #2">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/3.jpg" data-fancybox="group" data-caption="Caption #3">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_3.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row gallery-row">
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/4.jpg" data-fancybox="group" data-caption="Caption #4">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_4.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/5.jpg" data-fancybox="group" data-caption="Caption #5">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_5.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/6.jpg" data-fancybox="group" data-caption="Caption #6">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_6.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row gallery-row">
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/7.jpg" data-fancybox="group" data-caption="Caption #7">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_7.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/8.jpg" data-fancybox="group" data-caption="Caption #8">
                            <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_8.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="/sites/all/themes/violet_ui/images/cfc/cfc_gallery/9.jpg" data-fancybox="group" data-caption="Caption #9">
                                <img src="/sites/all/themes/violet_ui/images/cfc/gallery_img_9.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Images 9 -->

                <!-- Slider -->
                <div class="col-md-6 col-md-offset-1 col-lg-4 col-lg-offset-2">
                    <div class="slider">
                        <!-- Iphone-slider -->
                        <div class="iphone-slider text-center">
                            <a href="" class="prev button-slide"></a>
                            <a href="" class="next button-slide"></a>
                            <div class="slider-wrapper">
                                <ul class='slides-container' data-current=0>
                                    <li class="slide-item">
                                        <img src="/sites/all/themes/violet_ui/images/cfc/slider/1.jpg" alt="">
                                    </li>
                                    <li class="slide-item">
                                        <img src="/sites/all/themes/violet_ui/images/cfc/slider/2.jpg" alt="">
                                    </li>
                                    <li class="slide-item">
                                        <img src="/sites/all/themes/violet_ui/images/cfc/slider/3.jpg" alt="">
                                    </li>
                                    <li class="slide-item">
                                        <img src="/sites/all/themes/violet_ui/images/cfc/slider/4.jpg" alt="">
                                    </li>
                                    <li class="slide-item">
                                        <img src="/sites/all/themes/violet_ui/images/cfc/slider/5.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Iphone-slider -->
                    </div>
                </div>
                <!-- /Slider -->

                <div class="col-md-4 col-md-offset-1">
                    <p class='cfc-block-text  opacity'>
                        <?php print $node->body['und'][8]['value']; ?>
                    </p>
                </div>

            </div>
            <!-- cfc-block-2-->

            <!-- cfc-block-3-->
            <div class="row cfc-block cfc-block-3">
                <div class="col-md-11">
                    <h4 class="opacity">
                        <?php print $node->body['und'][9]['value']; ?>
                    </h4>
                </div>
                <!-- Map -->
                <div class="col-md-4 col-sm-3 map-bg">
                    <img src="/sites/all/themes/violet_ui/images/cfc/l_map_bg.png" alt="">
                </div>
                <div class="col-md-4 col-sm-6 map-bg">
                    <p class='cfc-block-text opacity'>
                        <?php print $node->body['und'][10]['value']; ?>
                    </p>
                </div>
                <div class="col-md-4 col-sm-3 map-bg">
                    <img src="/sites/all/themes/violet_ui/images/cfc/r_map_bg.png" alt="">
                </div>
                <!-- Map -->    

                <div class="col-md-12">
                    <h3 class='text-center opacity'>
                        <?php print $node->body['und'][11]['value']; ?>
                    </h3>
                </div>
            </div>
            <!-- cfc-block-3-->

            <!-- Pages-pagination -->
            <div class="row pages-pagination type-2 cfc-block cfc-block-4">
                <div class="col-md-12">
                    <div class="pagination-page-logo text-center">
                        <img src="/sites/all/themes/violet_ui/images/cfc/cfc_bottom.png" alt="">
                        <img src="/sites/all/themes/violet_ui/images/cfc/horn.png" alt="">
                    </div>
                </div>
                <div class="col-xs-5 prev-page">
                    <a href='/fondexx' class="page-title pull-right">
                        Fondexx
                    </a>
                </div>
                <div class="col-xs-5 col-xs-offset-2 next-page">
                    <a href='/tax' class="page-title pull-left">
                        Tax from us
                    </a>
                </div>
            </div>
            <!-- /Pages-pagination -->

        </div>
    </main>

    <!--(bake parts/footer.php)-->
</body>
</html>