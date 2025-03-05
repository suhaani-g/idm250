<section class="featured-products">
    <div class="container">
        <h2><?php echo get_theme_mod('featured_title', 'Best Sellers'); ?></h2>
        <div class="product-grid">
            <?php
            $args = array(
                'post_type'      => 'post', 
                'posts_per_page' => 3,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="product-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
