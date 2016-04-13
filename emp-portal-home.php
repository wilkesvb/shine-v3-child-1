<?php
/*Template Name: Employee Portal Home*/
?>

<?php get_header(); ?>
			
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="inner-wrap border-bottom margin-bottom">

		<div class="page-title">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="content-wrap">

			<div class="page-content">

				
				<div class="emp-sidebar">
					
					<section>
						<h4>HOT Jobs</h4>
						<ul>

						<?php 

							$args = array(
								'post_type' => 'featured_job'
							);
							$query = new WP_Query( $args );

						?>

						<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li>
								<a href="<?php the_field( 'job_link' ); ?>" target="_blank"><?php the_field( 'jobs_title' ); ?>&nbsp;<br>- <?php the_field( 'job_location' ) ?></a>
							</li>
						
						<?php endwhile; endif; wp_reset_postdata(); ?>

						</ul>

						<a href="http://ejob.bz/ATS/CompanyPortal.do?refresh=true&companyGK=19638&portalGK=2891">More Listings &gt;</a>

					</section>

					<section>
						<h4>Important Documents</h4>
						<ul>

							<?php 

								$args = array(
									'post_type' => 'emp-docs'
								);
								$query = new WP_Query( $args );

							?>

							<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							
							<li><a href="<?php the_field( 'document_link' ) ?>" target="_blank"><?php the_field( 'document_title' ) ?></a></li>

							<?php endwhile; endif; wp_reset_postdata(); ?>

						</ul>
					</section>

				</div>

				<div class="emp-sidebar right">

					<section>
						
						<h4>Calendar</h4>

					</section>

					<section>

						<h4>APP Downloads</h4>

							<?php 

								$args = array(
									'post_type' => 'emp-apps'
								);
								 $query = new WP_Query( $args );
							?>

							<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

								<div>

									<?php 

									$image = get_field('app_logo');

									if( !empty($image) ): ?>

									<div class="col-1-2"><img class="app-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>

									<?php endif; ?>

									<div class="col-1-2"><h5><?php the_field( 'app_name' ) ?></h5></div>

									<div class="clear"></div>

									<a href="<?php the_field( 'app_store_link' ) ?>" target="_blank" ><img class="store-button" src="/wp-content/uploads/2016/04/App_Store_icon-1-copy.png" alt="Available on the App Store" /></a>

									<a href="<?php the_field( 'google_play_link' ) ?>" target="_blank" ><img class="store-button" src="/wp-content/uploads/2016/04/google-store-badge.png" alt="Available on Google Play" /></a>

									<div class="clear"></div>

								</div>

							<?php endwhile; endif; wp_reset_postdata(); ?>

					</section>

				</div>

				<div class="emp-center">
					
					<h2>Emergency Contacts</h2>

					<section>

						<?php 

							$args = array(
								'post_type' => 'emergency_contact'
							);
							$query = new WP_Query( $args );

						?>

						<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

						<div class="contact">
							<h4><?php the_field( 'title' ); ?></h4>
							<p>Phone: <a href="tel://<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a></br>
								email: <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></br>
								address: <?php the_field( 'address' ); ?></p>
						</div>

						<?php endwhile; endif; wp_reset_postdata(); ?>

						<div class="clear"></div>

					</section>

					<h2>Announcements</h2>

						<p><?php the_content(); ?></p>

						<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, no pages matched your criteria' ); ?></p>
						
						<?php endif; ?>

					<h2>Newsletters</h2>

						News letters and stuff

				</div>

				

			</div>

		</div>

<!-- 		<?php get_sidebar( 'about' ); ?>
 -->
		<div class="clear"></div>

	</div>

<?php get_footer(); ?>