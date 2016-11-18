<div class="location-post">
    <h3 class="entry-title"><?php the_title(); ?></h3>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <div class="location-title">
        <?php echo get_post_meta( get_the_ID(), 'standplaats-titel', true); ?>
    </div>
    <div class="location-description">
        <?php echo get_post_meta( get_the_ID(), 'standplaats-omschrijving', true); ?>
    </div>
</div>


