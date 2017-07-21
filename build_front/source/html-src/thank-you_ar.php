<?php
$node = node_load(31);
?>

<!--(bake parts/head-ar.php)-->

<body class="thank-you-page">
    <!--(bake parts/nav-and-header-ar.php)-->

    <main>
        <div class="container">
            <div class="thank-you-block">
                <div class="row">
                    <div class="col-md-6">
                        <h1><?php print $node->title;?></h1>
                        <h3><?php print $node->body['und'][0]['value']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--(bake parts/footer-ar.php)-->
</body>
</html>