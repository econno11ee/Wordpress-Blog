<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="Angular\app.js"></script>
<script src="Angular\homefactory.js"></script>
<script src="Angular\ng-controller-home.js"></script>
<div class="custom-header" ng-app="wordPressTest">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
