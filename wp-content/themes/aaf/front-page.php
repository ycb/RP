<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AAF
 * @package AAF - 2013 1.0
 */
get_header();
?>

<div id="primary" class="content-area span8">
    <div id="content" class="site-content" role="main">

    	<?php 
    		$args = array( 'numberposts' => 4,
    						'cat' => -150 ); 
    		$lastposts = get_posts( $args ); 
    		foreach($lastposts as $post) : setup_postdata($post); 
    	?>
    		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    			<header class="entry-header">
			        <h1 class="entry-title graybg"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
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
    	<?php endforeach; ?>

		
		<h1 class="sectiontitle">Featured Video</h1>	

		<?php 	//latest updates arguments
			$args = array(
				'category_name' => 'video',
				'posts_per_page' => 1
			);
		
			// The Query
			$querylatestupdates = new WP_Query( $args );
		
			// The Loop
			while ( $querylatestupdates->have_posts() ) :
				$querylatestupdates->the_post();
				get_template_part( 'content', 'video' );
			endwhile;
			?>



    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<div class="hidden-desktop sidebarmobile"><?php get_sidebar('mobile'); ?></div>
<div class="visible-desktop sidebardesktop span4"><?php get_sidebar('desktop'); ?></div>
<?php get_footer(); ?>