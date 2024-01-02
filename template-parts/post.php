<div class="card m-4 rounded border" style="width: 280px; max-width: 280px; box-shadow: 10px 10px 10px rgba(0, 0, 0, .2);">
    <?php the_post_thumbnail('post-preview') ?>
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