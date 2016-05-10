<?php 

	$args = array(
		'post_type' => 'emergency_contact'
	);
	$query = new WP_Query( $args );

?>

<?php if( is_user_logged_in() ) : if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<div class="contact">

	<h4><?php the_field( 'title' ); ?></h4>

	<p>Contact: <?php the_field( 'contact_name' ); ?></br>
		Phone: <a href="tel://<?php the_field( 'area_code' ); ?><?php the_field( 'phone_first3' ); ?><?php the_field( 'phone_last4' ); ?>">(<?php the_field( 'area_code' ); ?>) <?php the_field( 'phone_first3' ); ?>-<?php the_field( 'phone_last4' ); ?></a>

		<?php

			if(get_field('extension_number'))
			{
				echo 'Ext. (' . get_field('extension_number') . ')';
			}

		?>


	</a></br>
		Email: <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></br>
		Address: <?php the_field( 'address' ); ?></p>

</div>

<?php endwhile; endif; endif; wp_reset_postdata(); ?>