<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >
<div class="container-fluid" ng-app="wordPressTest" ng-controller="Homecontroller">
	<form class="simple-form col-lg-3" name="createForm" novalidate>
			<div class="form-group" ng-class="{ 'has-error' : createForm.post_author.$invalid || createForm.post_author.$pristine }">
			<label>Title</label>
			<input type="text" class="form-control" id="post_title" ng-model="post.post_title" name="post_title" required/>
			<p class="label label-danger" ng-show="createForm.post_title.$invalid || createForm.post_title.$pristine">Required!</p>
			</div>
			<div class="form-group" ng-class="{ 'has-error' : createForm.post_author.$invalid || createForm.post_author.$pristine }">
			<label>Post Content</label>
			<input type="text" class="form-control" name="post_content" ng-model="post.post_content" placeholder="write your post here" />
		</div>
			<button ng-disabled="createForm.$invalid" type="submit" ng-click="submit(post)" class="btn btn-default">Submit</button>
	</form>
</div>
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );

		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
