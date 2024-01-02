<div class="rounded text-center">
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