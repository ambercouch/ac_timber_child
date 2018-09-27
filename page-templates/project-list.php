<?php
/**
 * Template Name: ACT Child - Project List
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 * 
 * @package Thematic
 * @subpackage Templates
 */
$postType = get_field('custom_post_type');
$showPosts = get_field('num_posts');
$tax = get_field('num_posts');
$cat = get_field('num_posts');
$exc = get_field('num_posts');


get_header(); ?>

		<div id="primary-project" class="content-area act-child-project-list">
			<div id="content" class="site-content" role="main">
				<h2 class="header__title--projects"><?php the_title(); ?></h2>
                        <ul id="ambercouch_projects" class="<?php echo $postType; ?>-list ">
			<?php ac_custom_loop($postType,$showPosts ) ?>
                        </ul><!-- end <?php echo $postType; ?>-list --> 
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->


<?php get_footer(); ?>