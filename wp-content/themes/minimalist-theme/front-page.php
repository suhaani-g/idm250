<?php
/**
 * Front Page Template
 *
 * This controls the homepage layout of the Minimalist Skincare website.
 *
 * 📌 WordPress uses `front-page.php` when:
 *   - "A static page" is selected as the homepage in **Settings > Reading**.
 *
 * 🎨 Features:
 *   - Custom hero section for branding.
 *   - Featured products section.
 *   - Testimonials for social proof.
 *   - About the brand.
 *
 * @package MinimalistSkincare
 */
?>

<?php get_header(); ?>

<div class="wrapper">
  <?php get_template_part('components/hero-home'); ?>
  <?php get_template_part('components/featured-products'); ?>
  <?php get_template_part('components/testimonials'); ?>
  <?php get_template_part('components/about-section'); ?>
</div>

<?php get_footer(); ?>
