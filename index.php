<?php
//header
get_header();

//navbar
get_template_part('template-parts/nav');

if (is_home()) {
    //home page slider
    get_template_part('template-parts/slider');
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 p-2 p-md-4 card-group justify-content-center" style="align-items: flex-start;">
            <?php
            if (have_posts()) {
                //for every posts in wp
                while (have_posts()) {
                    the_post();

                    get_template_part('template-parts/post');
                }
            }

            ?>
        </div>
        <div class="col-md-3 p-2 p-md-4" style="background-color: #eee;">
            <?php dynamic_sidebar('sidebar-1') ?>
        </div>
    </div>

    <?php
    //pagination
    get_template_part('template-parts/pagination');
    ?>
</div>


<?php

get_footer();
