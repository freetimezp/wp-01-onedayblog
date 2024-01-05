<?php
//header
get_header();

//navbar
get_template_part('template-parts/nav');
?>

<div class="my-4">
    <?php the_post_thumbnail('post-preview') ?>
    <div class="card-body">
        <h5 class="card-title">
            <?php the_title() ?>
        </h5>

        <p class="text-muted">
            <?php the_time("M jS, Y") ?> | by <?= (the_author() === '') ? 'Unknown' : the_author() ?>
        </p>

        <p class="card-text">
            <?php the_content() ?>
        </p>
    </div>
</div>

<?php

get_footer();
