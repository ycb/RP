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
    		$args = array( 'numberposts' => 1 ); 
    		$lastposts = get_posts( $args ); 
    		foreach($lastposts as $post) : setup_postdata($post); 
    	?>
    		<h1 class="sectiontitle">
    			<a href="<?php the_permalink(); ?>">
    				<?php the_title(); ?>
    				<?php echo the_post_thumbnail( 'full' ); ?> 
    			</a>
    		</h1> 
    		<p class="post-excerpt">
    			<?php echo wp_trim_words( get_the_content(), 200 ); ?>
    		</p>
    	<?php endforeach; ?>

		
		<h1 class="sectiontitle">Lead Video</h1>	

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

		<h1 class="sectiontitle">Health Beat</h1>

	
		<?php
		
			//latest upcoming events arguments
			$argsupevents = array(
				'post_type'=>'event',
				'event_start_after' => 'today',
				'posts_per_page' => 1,
				'group_events_by'=>'occurrence'//Don't group by series
			);
		
			// The Query
			$queryupevents = new WP_Query( $argsupevents );
			// The Loop
			while ( $queryupevents->have_posts() ) :
				$queryupevents->the_post();
				get_template_part( 'content', 'front-page' );
			endwhile;
			?>

			<!-- <h1 class="sectiontitle">Featured News</h1>

		<?php
		
			//latest featured arguments
			$argsfeatured = array(
				'category_name' => 'featured',
				'posts_per_page' => 1
			);
		
			// The Query
			$queryfeatured = new WP_Query( $argsfeatured );
		
			// The Loop
			while ( $queryfeatured->have_posts() ) :
				$queryfeatured->the_post();
				get_template_part( 'content', 'front-page' );
			endwhile;
		?> -->

    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<div class="hidden-desktop sidebarmobile"><?php get_sidebar('mobile'); ?></div>
<div class="visible-desktop sidebardesktop span4"><?php get_sidebar('desktop'); ?></div>
<?php get_footer(); ?>