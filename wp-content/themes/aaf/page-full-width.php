<?php
/*
Template Name: Full Width - Page
*/
get_header();
?>

<div id="primary" class="content-area row-fluid span12">
    <div id="content" class="site-content" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; // end of the loop. ?>

    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
<?php get_footer(); ?>