<?php
$node = node_load(12);
?>

<!--(bake parts/head.php)-->

<body class='get-in-touch'>
    <!--(bake parts/nav-and-header.php)-->

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-11">
                    <h1 class="opacity"><?php print $node->body['und'][0]['value']; ?></h1>
                </div>
            </div>
            <div class="brief-info">
                <h3 class="opacity"><?php print $node->body['und'][1]['value']; ?></h3>
                <p class="opacity"><?php print $node->body['und'][2]['value']; ?></p>
            </div>
            <div class="brief-info">
                <h3 class="opacity"><?php print $node->body['und'][3]['value']; ?></h3>
                <p class="opacity"><?php print $node->body['und'][4]['value']; ?></p>
            </div>
            <div class="brief-info">
                <h3 class="opacity"><?php print $node->body['und'][5]['value']; ?></h3>
                <p class="opacity"><?php print $node->body['und'][6]['value']; ?></p>
            </div>
        </div>

        <div class="container-fluid map-tabs">
            <div class="map">
                <!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad6af0716edd483946627563e5ea4d19041e14a3f99fc8830812aeab34ac206cb&amp;width=100%25&amp;height=652.5px&amp;lang=ru_RU&amp;scroll=true"></script>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4485.019114318743!2d46.715790615487926!3d24.665562884146212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0467e9ee41e5%3A0x13daee250af37a19!2sArrest+arrivals+Division+of+the+box!5e1!3m2!1sru!2sua!4v1493896338489" width="100%" height="652" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="tabs">
                <ul>
                    <li><a href="tab-1" target-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1599.0623581803422!2d30.41823851016308!3d50.449719994582225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTDCsDI2JzU5LjAiTiAzMMKwMjUnMDkuNyJF!5e1!3m2!1sru!2sua!4v1493895634373">Ukraine, Kyiv</a></li>
                    <li><a href="tab-2" target-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d66614.65387449355!2d-77.1536789664104!3d38.75235661380676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7ad85004a919f%3A0xf41da7fa47ac7213!2zNzAyNCBFbGxpbmdoYW0gQ2lyIGIsIEFsZXhhbmRyaWEsIFZBIDIyMzE1LCDQodCo0JA!5e1!3m2!1sru!2sua!4v1493896450033">USA, Virginia  </a></li>
                    <li class="map-active"><a href="tab-3" target-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4485.019114318743!2d46.715790615487926!3d24.665562884146212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0467e9ee41e5%3A0x13daee250af37a19!2sArrest+arrivals+Division+of+the+box!5e1!3m2!1sru!2sua!4v1493896338489">Saudi Arabia, Riyadh</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab tab-1">
                        <h4><?php print $node->body['und'][7]['value']; ?></h4>
                        <div class="map-block-text">
                            <?php print $node->body['und'][8]['value']; ?>
                        </div>

                        <div class="map-block-text">
                            <h5><?php print $node->body['und'][9]['value']; ?></h5>
                            <p>
                                <?php print $node->body['und'][10]['value']; ?>
                            </p>
                        </div>

                        <div class="map-block-text">
                            <h5><?php print $node->body['und'][11]['value']; ?></h5>
                            <p>
                                <?php print $node->body['und'][12]['value']; ?>
                            </p>
                        </div>

                        <div class="map-block-text">
                            <h5><?php print $node->body['und'][13]['value']; ?></h5>
                            <p>
                                <?php print $node->body['und'][14]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="tab tab-2">
                        <h4><?php print $node->body['und'][7]['value']; ?></h4>
                        <div class="map-block-text">
                            <?php print $node->body['und'][15]['value']; ?>
                        </div>

            <div class="map-block-text">
              <h5><?php print $node->body['und'][9]['value']; ?></h5>
              <p>
                  <?php print $node->body['und'][10]['value']; ?>
              </p>
            </div>

            <div class="map-block-text">
              <h5><?php print $node->body['und'][11]['value']; ?></h5>
              <p>
                  <?php print $node->body['und'][16]['value']; ?>
              </p>
            </div>

                        <div class="map-block-text">
                            <h5><?php print $node->body['und'][13]['value']; ?></h5>
                            <p>
                                <?php print $node->body['und'][14]['value']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="tab tab-3 map-active">
                        <h4><?php print $node->body['und'][7]['value']; ?></h4>
                        <div class="map-block-text">
                            <?php print $node->body['und'][17]['value']; ?>
                        </div>

            <div class="map-block-text">
              <h5><?php print $node->body['und'][9]['value']; ?></h5>
              <p>
                  <?php print $node->body['und'][10]['value']; ?>
              </p>
            </div>

            <div class="map-block-text">
              <h5><?php print $node->body['und'][11]['value']; ?></h5>
              <p>
                  <?php print $node->body['und'][12]['value']; ?>
              </p>
            </div>

                        <div class="map-block-text">
                            <h5><?php print $node->body['und'][13]['value']; ?></h5>
                            <p>
                                <?php print $node->body['und'][14]['value']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h2 class="opacity"><?php print $node->body['und'][18]['value']; ?></h2>
                        <p class='sub-title opacity'>
                            <?php print $node->body['und'][19]['value']; ?>
                        </p>
                        <p class='block-text opacity'>
                            <?php print $node->body['und'][20]['value']; ?>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-7 col-md-offset-1">
                        <div class="form-block">
                            <h5 class="opacity"><?php print $node->body['und'][21]['value']; ?></h5>
                            <!--(bake parts/form.php)-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!--(bake parts/footer.php)-->
</body>
</html>
