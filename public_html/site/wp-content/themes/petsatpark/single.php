<?php
/**
 * Single post template
 */

?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		</div>
		<?php endwhile; // end of the loop. ?>

<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
