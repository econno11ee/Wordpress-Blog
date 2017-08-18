<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeGrill
 * @subpackage Suffice
 * @since Suffice 1.0.0
 */
 include_once( ABSPATH . '/wp-content/plugins/Techtonic-WPPlugin/utils/DataAccess.php');


 global $wpdb;
 $user = wp_get_current_user();

get_header(); ?>

<?php
/**
 * suffice_before_body_content hook
 */
do_action( 'suffice_before_body_content' ); ?>


<div id="primary" class="content-area" ng-app="myShoppingList" ng-controller="myCtrl">
	<main id="main" class="site-main" role="main">

		<?php
		echo($user->user_nicename);
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			/**
			 * suffice_before_comments_template hook
			 */
			do_action( 'suffice_before_comments_template' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			/**
			 * suffice_after_comments_template hook
			 */
			do_action( 'suffice_after_comments_template' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
/**
 * suffice_after_body_content hook
 */
do_action( 'suffice_after_body_content' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
