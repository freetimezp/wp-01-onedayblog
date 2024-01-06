<?php
$slider_active = get_theme_mod('onedayblog_home_slide_activate', 1);
?>

<?php if ($slider_active) : ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php
                $image = get_template_directory_uri() . '/assets/images/picsum-001.jpg';
                //get image from slider section in WP
                if (get_theme_mod('onedayblog_home_slide_1', '') != "") {
                    $image = wp_get_attachment_url(get_theme_mod('onedayblog_home_slide_1', ''));
                }
                ?>
                <img class="d-block w-100" src="<?= $image ?>" alt="slide">
                <div class="carousel-caption d-none d-md-block">
                    <?php
                    $slider_title = get_theme_mod('onedayblog_home_slide_header_text_1', 0);
                    $slider_content = get_theme_mod('onedayblog_home_slide_content_text_1', 0);
                    ?>
                    <h5>
                        <?= $slider_title ?>
                    </h5>
                    <p>
                        <?= $slider_content ?>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <?php
                $image = get_template_directory_uri() . '/assets/images/picsum-002.jpg';
                //get image from slider section in WP
                if (get_theme_mod('onedayblog_home_slide_2', '') != "") {
                    $image = wp_get_attachment_url(get_theme_mod('onedayblog_home_slide_2', ''));
                }
                ?>
                <img class="d-block w-100" src="<?= $image ?>" alt="slide">
                <div class="carousel-caption d-none d-md-block">
                    <?php
                    $slider_title = get_theme_mod('onedayblog_home_slide_header_text_2', 0);
                    $slider_content = get_theme_mod('onedayblog_home_slide_content_text_2', 0);
                    ?>
                    <h5>
                        <?= $slider_title ?>
                    </h5>
                    <p>
                        <?= $slider_content ?>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <?php
                $image = get_template_directory_uri() . '/assets/images/picsum-003.jpg';
                //get image from slider section in WP
                if (get_theme_mod('onedayblog_home_slide_3', '') != "") {
                    $image = wp_get_attachment_url(get_theme_mod('onedayblog_home_slide_3', ''));
                }
                ?>
                <img class="d-block w-100" src="<?= $image ?>" alt="slide">
                <div class="carousel-caption d-none d-md-block">
                    <?php
                    $slider_title = get_theme_mod('onedayblog_home_slide_header_text_3', 0);
                    $slider_content = get_theme_mod('onedayblog_home_slide_content_text_3', 0);
                    ?>
                    <h5>
                        <?= $slider_title ?>
                    </h5>
                    <p>
                        <?= $slider_content ?>
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>