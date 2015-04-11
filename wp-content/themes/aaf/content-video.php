<?php
/**
 * The template used for displaying video content in front-page.php
 *
 * @package AAF
 * @package AAF - 2013 1.0
 */
?>
<?php global $more; $more = 0; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<aside class="front-thumb">
		<?php the_post_thumbnail('medium');  ?>
	</aside>
    <header class="entry-header">
        <h1 class="entry-title graybg"><a href="<?php get_permalink() ?>"><?php the_title(); ?></a></h1>
    </header><!-- .entry-header -->

    <div class="entry-content videoWrapper">
        <?php 
            $re = "/(\\[embed\\]\\S*)/"; 
            $content = get_the_content('');
            $arr = preg_match($re, $content, $matches);
            $video = $matches[0];

            $clean_content = preg_replace($re, '', $content);
            the_content( );
            
        	//echo '<p>' . wp_trim_words( $clean_content, $num_words = 200, '' ) . '<br><br><a href="' . get_permalink() . '"><span class="meta-nav btn pull-right">READ MORE</span></a><p>';
        ?>
        <div class="socialposticons visible-desktop">
            <span class='st_facebook_hcount' displayText='Facebook'></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class='st_twitter_hcount' displayText='Tweet'></span>
        </div>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'AAF' ), 'after' => '</div>') ); ?>
        <?php edit_post_link( __( 'Edit', 'AAF' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
