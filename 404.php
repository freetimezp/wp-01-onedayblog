<?php
//header
get_header();

//navbar
get_template_part('template-parts/nav');
?>

<div class="p-4 text-center">
    <h1 style="text-align: center; margin: 10vh 0;">
        Page not found. <br> You can try use search bar in menu or return to home page.
    </h1>
    <a href="<?= get_home_url() ?>" class="btn btn-primary">
        Back to Home Page
    </a>
</div>

<?php

get_footer();
