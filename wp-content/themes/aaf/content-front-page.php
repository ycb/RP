<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package AAF
 * @package AAF - 2013 1.0
 */
?>
<?php global $more; $more = 0; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title graybg"><a href="<?php get_permalink() ?>"><?php the_title(); ?></a></h1>
    </header><!-- .entry-header -->
    
	<aside class="front-thumb">
		<?php the_post_thumbnail('medium');  ?>
	</aside>

    <div class="entry-content">
        <?php 
            $excerpt = get_the_excerpt();
            if ( $excerpt != '' ) {
                the_excerpt();
            } else {
                $content = get_the_content('');
                echo '<p>' . wp_trim_words( $content, $num_words = 100, '' ) . '<br><br><a href="' . get_permalink() . '"><span class="meta-nav btn pull-right">READ MORE</span></a><p>';
            }
        ?>
        <div class="socialposticons visible-desktop">
            <span class='st_facebook_hcount' displayText='Facebook'></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class='st_twitter_hcount' displayText='Tweet'></span>
        </div>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'AAF' ), 'after' => '</div>') ); ?>
        <?php edit_post_link( __( 'Edit', 'AAF' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
