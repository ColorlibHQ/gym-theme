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

	$gym_reservation_title     = !empty( gym_opt( 'gym_reservation_title' ) ) ? gym_opt( 'gym_reservation_title' ) : '';
	$gym_reservation_sub_title = !empty( gym_opt( 'gym_reservation_sub_title' ) ) ? gym_opt( 'gym_reservation_sub_title' ) : '';
	$gym_reservation_btn_text  = !empty( gym_opt( 'gym_reservation_btn_text' ) ) ? gym_opt( 'gym_reservation_btn_text' ) : '';
	$gym_reservation_btn_url	  = !empty( gym_opt( 'gym_reservation_btn_url' ) ) ? gym_opt( 'gym_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $gym_reservation_title )?></h3>
			<p><?php echo esc_html( $gym_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $gym_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $gym_reservation_btn_text )?></a>
		</div>
	</div>