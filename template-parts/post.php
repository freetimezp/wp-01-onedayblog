<div class="card m-2 m-md-3 rounded border text-center" style="width: 280px; max-width: 280px; box-shadow: 10px 10px 10px rgba(0, 0, 0, .2);">
    <?php the_post_thumbnail('post-preview') ?>
    <div class="card-body">
        <h5 class="card-title">
            <?php the_title() ?>
        </h5>
        <p class="text-muted">
            <?php
            $cat = get_the_category();
            if (is_array($cat)) {
                foreach ($cat as $cat_obj) {
                    echo '<a href="' . $cat_obj->taxonomy . '/' . $cat_obj->slug . '">' . $cat_obj->name .  '</a>';
                }
            }
            ?>
        </p>
        <p class="text-muted">
            <?php the_time("M jS, Y") ?> | by <?php the_author() ?>
        </p>
        <p class="card-text">
            <?= substr(get_the_excerpt(), 0, 50) ?>..
        </p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary">
            Read More
        </a>
    </div>
</div>