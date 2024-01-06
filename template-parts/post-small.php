<div class="card m-2 m-md-3 rounded border text-center" style="width: 280px; max-width: 280px; box-shadow: 10px 10px 10px rgba(0, 0, 0, .2);">
    <div class="px-2" style="display: flex; align-items: center;">
        <div style="flex: 1;">
            <?php the_post_thumbnail('post-preview-small') ?>
        </div>

        <div class="card-body" style="flex: 2;">
            <h5 class="card-title">
                <?php the_title() ?>
            </h5>

            <a href="<?php the_permalink() ?>">
                Read More
            </a>
        </div>
    </div>
</div>