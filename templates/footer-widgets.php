<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Gym
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
	$footer_default_text = '<p>5th flora, 700/D kings road, green <br> lane New York-1782 
		<a href="#">+10 367 826 2567</a>
		<a href="#">contact@carpenter.com</a>
	</p><p></p>';
	$footer_text = gym_opt( 'gym_footer_text' ) == '' ? $footer_default_text : gym_opt( 'gym_footer_text' );
	
	?>
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-md-6 col-lg-3">
					<div class="footer_widget">
						<?php
							echo 
							'
								<div class="footer_logo">
									'.gym_theme_footer_logo().'
								</div>
							';
							if ( $footer_text ) {
								echo '<p>'.wp_kses_post(nl2br( $footer_text )).'</p>';
							}
							
							// Social profiles
							$social_opt = gym_opt('gym_social_profile_toggle');
							if ( $social_opt == true ) {
								$social_items = gym_opt('gym_social_profiles');
								if( is_array( $social_items ) && count( $social_items ) > 0 ){
									echo '<div class="socail_links"><ul>';
										foreach ($social_items as $value) {
											echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
										}
									echo '</ul></div>';
								}          
							}  
						?>

					</div>
				</div>
		
				<?php							
					// Footer widget 2
					if( is_active_sidebar( 'footer-2' ) ){
						echo '<div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">';
							dynamic_sidebar( 'footer-2' );	
						echo '</div>';
					}

					// Footer widget 3
					if( is_active_sidebar( 'footer-3' ) ){
						echo '<div class="col-xl-4 col-md-6 col-lg-4">';
							dynamic_sidebar( 'footer-3' );
						echo '</div>';
					}
				?>

			</div>
		</div>
	</div>