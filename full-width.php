<?php
/*Template Name: Full Width*/
?>

<?php get_header(); ?>
			
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="inner-wrap border-bottom margin-bottom">

		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="content-wrap">

			<div class="page-content">

				<?php the_content(); ?>

				<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no pages matched your criteria' ); ?></p>
				
				<?php endif; ?>

			</div>

		</div>

		<div class="clear"></div>

	</div>

<?php get_footer(); ?>