<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'gym_preloader', 'gym_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'gym_header', 'gym_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'gym_footer', 'gym_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'gym_wrp_start', 'gym_wrp_start_cb', 10 );
	add_action( 'gym_wrp_end', 'gym_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'gym_blog_col_start', 'gym_blog_col_start_cb', 10 );
	add_action( 'gym_blog_col_end', 'gym_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'gym_blog_posts_thumb', 'gym_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'gym_blog_details_wrap_start', 'gym_blog_details_wrap_start_cb', 10 );
	add_action( 'gym_blog_details_wrap_end', 'gym_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'gym_blog_posts_title', 'gym_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'gym_blog_posts_meta', 'gym_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'gym_blog_posts_excerpt', 'gym_blog_posts_excerpt_cb', 10 );
	// add_action( 'gym_blog_posts_excerpt', 'gym_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'gym_blog_posts_info_link', 'gym_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'gym_blog_posts_content', 'gym_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'gym_blog_posts_share', 'gym_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'gym_blog_sidebar', 'gym_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'gym_blog_single_meta', 'gym_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'gym_page_content', 'gym_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'gym_fof', 'gym_fof_cb', 10 );

	

?>