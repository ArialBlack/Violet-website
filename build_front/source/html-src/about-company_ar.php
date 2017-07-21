<?php
$node = node_load(26);
?>

<!--(bake parts/head-ar.php)-->

<body class='company-descr'>
<!--(bake parts/nav-and-header-ar.php)-->

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

<!--(bake parts/footer-ar.php)-->
</body>
</html>
