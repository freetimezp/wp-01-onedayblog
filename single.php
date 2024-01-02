<?php
//header
get_header();

//navbar
get_template_part('template-parts/nav');

?>

<div class="p-4 card-group justify-content-center">
    <?php
    if (have_posts()) {
        //for every posts in wp
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/single-post');
        }
    }
    ?>
</div>


<?php

get_footer();
