<?php get_header();  
/**
 * Template Name: Front-Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Resumee
 */
?>

<section class="frontpage-widget">
        <?php
            if ( ! dynamic_sidebar( 'frontpage-1' ) ) {
           
                       } ?>
        <div class="clearfix"></div>
</section>

<?php get_footer(); 