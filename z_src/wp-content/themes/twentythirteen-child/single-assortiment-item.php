<div class="assortiment-post">
    <h3 class="entry-title"><?php the_title(); ?></h3>


    <div class="assortiment-price-container">
        <div class="assortiment-price-quantity">
            <?php echo get_post_meta( get_the_ID(), 'assortiment-prijs-hoeveelheid', true); ?>
        </div>
        <div class="assortiment-price">
            <?php echo get_post_meta( get_the_ID(), 'assortiment-prijs', true); ?>
        </div>
    </div>

</div>