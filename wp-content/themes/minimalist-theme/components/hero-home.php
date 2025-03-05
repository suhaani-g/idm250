<div class="hero-home">
    <div class="container">
        <h1 class="page-header">
            <?php echo get_theme_mod('hero_title', get_the_title()); ?>
        </h1>
        <p>
            <?php echo get_theme_mod('hero_subtitle', get_the_excerpt()); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/shop')); ?>" class="btn">Shop Now</a>
    </div>
</div>
