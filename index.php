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

<div class="p-4 card-group justify-content-center">
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

<?php
//pagination
get_template_part('template-parts/pagination');
?>


<?php

get_footer();
