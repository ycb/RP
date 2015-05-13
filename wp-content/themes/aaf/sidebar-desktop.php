<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package AAF
 * @package AAF - 2013 1.0
 */
?>
<div><!-- small trick so bootstrap doesn't think this is the first child. --></div>
<div id="secondary" class="sidebar" role="complementary">


 <aside id="search" class="widget widget_search">
                <?php get_search_form(); ?>
            </aside>
            
  <!-- #tabs -->
        <div id="tabs">
    <ul>
        <li><a href="#tab-1"><span>Mission</span></a></li>
        <li><a href="#tab-2"><span>Categories</span></a></li>
        <li><a href="#tab-3"><span>Contact</span></a></li>
    </ul>
    <div id="tab-1">
      
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(Tab1) ) : // sidebar tabber widget 1 ?>

    <?php endif;?>

        </div>
        <div id="tab-2">
            
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(Tab2) ) : // sidebar tabber widget 2 ?>

    <?php endif;?>

        </div>
        <div id="tab-3">

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(Tab3) ) : // sidebar tabber widget 3 ?>


    <?php endif;?>

        </div>

    </div> 
    <!-- #tabs -->

    <?php if ( !dynamic_sidebar( 'desktop' ) ) : ?>
       <?php endif; // end sidebar widget area ?>



