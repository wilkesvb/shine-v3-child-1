<?php 

	$args = array(
		'post_type' => 'emergency_contact'
	);
	$query = new WP_Query( $args );

?>

<?php if( is_user_logged_in() ) : if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<div class="contact">
	<h4><?php the_field( 'title' ); ?></h4>
	<p>Contact: <?php the_field( 'contact_name' ); ?></br>Phone: <a href="tel://<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a></br>
		email: <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></br>
		address: <?php the_field( 'address' ); ?></p>
</div>

<?php endwhile; endif; endif; wp_reset_postdata(); ?>