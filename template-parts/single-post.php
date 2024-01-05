<div class="rounded text-center">
    <?php
    $post_id = get_the_ID();
    $views = get_post_meta($post_id, 'views', true);
    //create and update attr views in db table wp_postmeta
    if ($views > 0) {
        update_post_meta($post_id, 'views', $views + 1);
    } else {
        update_post_meta($post_id, 'views', 1);
    }
    $views = get_post_meta($post_id, 'views', true);

    echo "Views: " . $views . "<br><br>";
    ?>

    <?php the_post_thumbnail(
        'post-thumbnail',
        [
            'style' => 'width: 1000px; height: 55vh; display: block; margin: 0 auto;'
        ]
    ) ?>
    <div class="card-body">
        <h5 class="card-title">
            <?php the_title() ?>
        </h5>
        <p class="card-text">
            <?= substr(get_the_excerpt(), 0, 50) ?>..
        </p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary">
            Read More
        </a>
    </div>
</div>