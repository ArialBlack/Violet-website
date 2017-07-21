<?php
$node = node_load(10);
?>

<!--(bake parts/head.php)-->

<body class='typical-page web-design'>
  <!--(bake parts/nav-and-header.php)-->

  <!-- Jumb -->
  <div class='jumb'>
    <div class='container'>
      <div class="vert-bottom">
      <div class="row">
        <div class="col-md-11 col-md-offset-1">
          <div class="page-logo opacity">
            <img src="/sites/all/themes/violet_ui/images/design/design_logo.png" alt="" class="jumb-logo">
          </div>
          <h1 class="opacity"><?php print $node->title;?></h1>
          <p class='jumb-descr opacity'>
            <?php print $node->body['und'][0]['value']; ?>
          </p>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- /Jumb -->

  <main>
    <!-- Steps -->
    <div class='steps'>
      <div class='container'>
        <div class="vertical-line"></div>
        <div class='row'>

          <!-- Left main -->
          <div class='col-md-6 col-md-offset-1'>
            <h2 class="opacity"><?php print $node->body['und'][1]['value']; ?></h2>
            <div class="step-block">
              <div class='row'>
                <div class='col-md-4'>
                  <p class='step-number opacity'>
                    1 /
                  </p>
                </div>
                <div class='col-md-8'>
                  <p class='step-descr opacity'>
                    <?php print $node->body['und'][2]['value']; ?>
                  </p>
                </div>
              </div>
            </div>

            <div class="step-block">
              <div class='row'>
                <div class='col-md-4'>
                  <p class='step-number opacity'>
                    2 /
                  </p>
                </div>
                <div class='col-md-8'>
                  <p class='step-descr opacity'>
                    <?php print $node->body['und'][3]['value']; ?>
                  </p>
                </div>
              </div>
            </div>

            <div class="step-block">
              <div class='row'>
                <div class='col-md-4'>
                  <p class='step-number opacity'>
                    3 /
                  </p>
                </div>
                <div class='col-md-8'>
                  <p class='step-descr opacity'>
                    <?php print $node->body['und'][4]['value']; ?>
                  </p>
                </div>
              </div>
            </div>

            <div class="step-block">
              <div class='row'>
                <div class='col-md-4'>
                  <p class='step-number opacity'>
                    4 /
                  </p>
                </div>
                <div class='col-md-8'>
                  <p class='step-descr opacity'>
                    <?php print $node->body['und'][5]['value']; ?>
                  </p>
                </div>
              </div>
            </div>

            <div class="step-block">
              <div class='row'>
                <div class='col-md-4'>
                  <p class='step-number opacity'>
                    5 /
                  </p>
                </div>
                <div class='col-md-8'>
                  <p class='step-descr opacity'>
                    <?php print $node->body['und'][6]['value']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- /Left-main -->

          <!-- Right-main -->
          <div class='col-md-4 col-md-offset-1'>
            <div class="marked-block">
              <h2 class="opacity"><?php print $node->body['und'][7]['value']; ?></h2>
              <p class="opacity"><?php print $node->body['und'][8]['value']; ?></p>
              <p class="opacity"><?php print $node->body['und'][9]['value']; ?></p>
            </div>
            <a class="btn btn-dashed opacity" href="/contacts#contact-form"> <?php print t('Connect');?> </a>
          </div>
          <!-- /Right-main -->
        </div>
      </div>
    </div>
    <!-- /Steps -->

    <!--(bake parts/case-studies.php)-->

    <!-- Pages-pagination -->
    <div class="pages-pagination">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-6 prev-page">
            <a href='/branding' class="page-title pull-right">
              <?php print t('Branding');?>
              <span class="logo-page">
                <img src="/sites/all/themes/violet_ui/images/branding/vertising_nav.png" alt="">
              </span>
            </a>
          </div>
          <div class="col-sm-5 col-xs-6 col-sm-offset-2 next-page">
            <a href='/mobile-marketing' class="page-title pull-left">
              <span class="logo-page">
                <img src="/sites/all/themes/violet_ui/images/mob-marketing/marketing_logo.png" alt="">
              </span>
              <?php print t('Mobile marketing');?>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Pages-pagination -->

  </main>

  <!--(bake parts/footer.php)-->
</body>
</html>
