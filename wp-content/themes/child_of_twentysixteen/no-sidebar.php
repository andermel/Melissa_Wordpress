<?php
/**
 * The template for displaying pages with no sidebar
 *
 * Template Name: no-sidebar.php
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area"> <!--would need to change the size to 100% when removing the side bar; would also have to create a custom class value as you only want to make the changes on one page-->
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?> 

</div><!-- .content-area -->

<?php //get_sidebar(); ?> <!--commenting out the sidebar on the hompage; remember that php and html is intermingled!-->
<?php get_footer(); ?>
